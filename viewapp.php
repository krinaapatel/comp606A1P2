<<?php
  include 'dbconfig.php';
  $fname    = $_SESSION['username'];
  $email    = $_SESSION['email'];
  $query    = "SELECT * FROM book WHERE email = '$email'";
	$results  = $conn->query($query);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sports Massage Therapist Booking</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
</head>

<body>
<section class = "viewhead text-white text-center">
    <div class = "overlay"></div>

    </div>
</section>
<section class = "margin40">
  <div class "container">
    <div class = "row">
      <div class = "col-md-4 col-md-offset-4 view-section">
      	<table border = '1' class = "table">
      		<tr><th>First Name</th><th>Appointment Date</th><th>Time</th><th>Action</th></tr>
          <?php
            while($row=$results->fetch_assoc()){
              echo "<tr>";
  	          echo "<td>".$row['fname']."</td>";
  	          echo "<td>".$row['date']."</td>";
  	          echo "<td>".$row['time']."</td>";
	      		  echo '<td><a href="delete.php?id='.$row['d_id'].'" Onclick="ConfirmDelete(event)"">Cancel</a></td>';
      		    echo "</tr>";
        }
        ?>
      	</table>
      </div>
    </div>
  </div>
</section>

  <!-- Bootstrap core JavaScript -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- ask to user for delete row-->
  <script type = "text/javascript">
    function ConfirmDelete(e) {
      var data = confirm('Are you sure you want to do this?');
	  if(data == true){
		alert("Record Deleted")
	  }
	  else{
		e.preventDefault();
		return false;
      }
    }
</script>
</body>

</html>
