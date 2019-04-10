<?php
session_start();
if(isset($_POST['submit']))
{
	include 'dbconfig.php';

	$dt = $_POST['date'];
	$time = $_POST['time'];

	
	$s = "select * from book where date='$dt' && time='$time'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ( $num > 0 ) 
	{
		echo "<h2>Select another date or time as it's already taken".$compareday."</h2>";
		header('location:booknow.html');
	}
	else 
	{
		$email = $_SESSION['email'];
		$problem = $_POST['prob'];
		$thr_typ = $_POST['therapyType'];
		$sql = "INSERT INTO book (email,prob,date,time,thr_typ) VALUES ('$email','$problem','$dt','$time','$thr_typ') ";
		echo "<h1>Booking successful!! Redirecting to home page....</h1>";
		header( "Refresh:10; url=profile.html");
	}
}
?>
