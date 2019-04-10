<?php
$number=rand();
include 'dbconfig.php';
$name=$_POST['email'];
$s="select * from user_table where email='$name'";
$result= mysqli_query($conn, $s);
$num=mysqli_num_rows($result);
if ($num == 1) {
  $s="update user_table set password='$number' where email='$name'";
  $result = mysqli_query($conn, $s);
  $rows=mysqli_affected_rows($conn);
  if($rows==1){

          $_SESSION ['rannum']=$number;
          header('location:random.php');
  }
}
else {
  Echo " No Email Found";
}
?>
