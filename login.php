<?php
session_start();
$error='';
if (isset($_POST['Login'])) {
	include 'dbconfig.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	if ($email == "admin@gmail.com" && $password == "admin@123") {
					header('location:adminview.php');
	}
	else{
						$email=$_POST['email'];
						$password=$_POST['password'];
						$query = mysqli_query($conn,"select * from user_table where password='$password' AND email='$email'");
						$rows = mysqli_fetch_assoc($query);
						$num=mysqli_num_rows($query);
						if ($num == 1) {
							$_SESSION['email']=$rows['email'];
							$_SESSION['username']=$rows['f_name'];
							header( "Refresh:10; url=profile.html");
						}
						else
						{
							$error = "invalid credential";
							echo "$error";
							header( "Refresh:12; url=login.html");

						}
						mysqli_close($conn);
			}
}
?>
