<?php

function newUser()
{
	include 'dbconfig.php';
	$fname  	= $_POST['FirstName'];
    $lname  	= $_POST['LastName'];
    $gender 	= $_POST['gender'];
	$email  	= $_POST['Email'];
	$password 	= $_POST['Password'];
	
	// INSERT QUERY FOR ENTER VALUE OF USER
	$sql = "INSERT INTO user_table (f_name, l_name, email, password, gender) VALUES ('$fname', '$lname', '$email', '$password', '$gender')";

	//  CONNECT DATABASE
	if (mysqli_query($conn, $sql))
	{
		echo "<h2>Record created successfully!! Redirecting to login page....</h2>";
		header( "Refresh:15; url = login.html");

	}
	else
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkUsername()
{
	// INCLUDE CONFIG FILE
	include 'dbconfig.php';

	// EMAIL VALIDATION
	$email	=	$_POST['Email'];
	$sql	=	 "SELECT * FROM user_table WHERE email = '$email'";

	$result	=	mysqli_query( $conn, $sql );

	if( mysqli_num_rows($result)!= 0 )
	{
		echo"<b><br>Username already exists!!";
	}
	else if(isset($_POST['signup']))
	{
		newUser();
	}
}

// WHEN USER SUBMIT FORM
if(isset($_POST['signup']))
{
	checkUsername();
}
?>