<?php
if(isset($_post['SubmitBtn']){
	// take random num
	$number=rand();

	// connect with database
	include 'dbconfig.php';


	$email 	= $_POST['email'];
	$s 		= "select * from user_table where email='$email'";
	$result = mysqli_query($con, $s);
	$num 	= mysqli_num_rows($result);

	// check with email
	if ($num == 1) {
	  $s = "update user_table set password='$number' where email='$email'";
	  $result = mysqli_query($con, $s);
	  $rows = mysqli_affected_rows($con);
	  if( $rows == 1 )
	  {
	          $_SESSION ['rannum'] = $number;
	          header('location:random.php');
	  }
	}
	else {
	  Echo " No Email Found";
	}
}
?>