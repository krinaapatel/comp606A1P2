<?php
// session start
session_start();
$error='';

// when user submit login form
if (isset($_POST['Login'])) {

	include 'dbconfig.php';
	$username 	= $_POST['email'];
	$password 	= $_POST['password'];

	$query 		= mysqli_query($conn,"select * from user_table where password='$password' AND username='$username'");
	$rows 		= mysqli_fetch_assoc($query);
	$num		= mysqli_num_rows($query);

	// if condition true
	if ( $num == 1 ) 
	{
		$_SESSION['email'] = $rows['email'];
		$_SESSION['username']     = $rows['f_name'];
		header( "Refresh:5; url=profile.html");
	}
	else
	{
		$error = "invalid credential";
		echo "$error";
		header( "Refresh:12; url=login.html");
	}
	mysqli_close($conn);
}
?>
