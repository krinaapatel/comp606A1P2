<?php
session_start();
include 'dbconfig.php';
if(isset($_POST['submit']))
{


		$dt=$_POST['date'];
		$time=$_POST['time'];
		$s="select * from book where date='$dt' && time='$time'";
		$result= mysqli_query($conn,$s);
		$num=mysqli_num_rows($result);
		if ($num == 1) {

					echo "<h2>Select another date or time as it's already taken </h2>";
					header( "Refresh:10; url=profile.html");
		}
		else {
			$email=$_SESSION['email'];
			$problem=$_POST['prob'];
			$thr_typ=$_POST['therapyType'];
			include 'dbconfig.php';
			mysqli_query($conn,"INSERT INTO book(email,prob,date,time,thr_typ) VALUES ('$email','$problem','$dt','$time','$thr_typ')");
			echo "<h1>Booking successful!! Redirecting to home page....</h1>";
			header( "Refresh:10; url=profile.html");
		}
}
?>
