<?php
session_start();
$error='';
if (isset($_POST['Login'])) {

	// conect db
	include 'dbconfig.php';


	$query = mysqli_query($conn,"select * from therapist where email='admin@email.com' AND pas='admin@123'");
	$rows  = mysqli_fetch_assoc($query);
	$num   = mysqli_num_rows($query);
	if ($num == 1) 
	{
		header('location:adminview.html');
	}
	else
	{
		require_once("dbconfig.php");
		$username = $_POST['email'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"select * from user_table where password='$password' AND username='$username'");
		$rows = mysqli_fetch_assoc($query);
		$num = mysqli_num_rows($query);
		
		if ($num == 1) {
			$_SESSION['email'] = $rows['email'];
			$_SESSION['username']= $rows['f_name'];
			header( "Refresh:1; url=profile.html");
		}
	    else
		{
			$error = "invalid credential";
			echo "$error";
			header( "Refresh:12; url=login.html");

		}
		mysqli_close($conn);
	}
	else {
			$error = "invalid credential";
			echo "$error";
			header( "Refresh:12; url=login.html");
	}
}
?>