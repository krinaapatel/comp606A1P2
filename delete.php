<?php
    include 'dbconfig.php';
    $id  = $_GET['id'];
    $aid = $_GET['a_id'];
    if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){

        $query = mysqli_query($connection, "DELETE FROM book WHERE d_id= ".$id);
        $result = mysqli_query($connection,$query);

        header("location:viewapp.php");
    }
    if (isset($_GET['a_id']) && is_numeric($_GET['a_id']) && $_GET['a_id'] > 0){

    	$query = mysqli_query($connection, "DELETE FROM book WHERE d_id= ".$a_id);
   		$result = mysqli_query($connection,$query);

    	header("location:adminview.php");
	}

 ?>
