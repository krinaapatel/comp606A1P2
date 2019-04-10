<?php
  include 'dbconfig.php';
  $query = "SELECT * FROM book";
	$results = $conn->query($query);
  $q = "select * from user_table";
  $rs = $conn->query($q);


 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name = "viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sports Massage Therapist Booking Admin</title>

  <!-- Bootstrap core CSS -->
  <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
   <link href = "css/style.css" rel="stylesheet">
</head>

<body>
<section class = "viewhead text-white text-center">
    <div class = "overlay"></div>

    </div>
</section>
<section class = "margin40">
  <div class "container">
    <div class = "row">
    <div class = "col-sm-2"></div>
    <div class = "col-sm-8 view-section">
      	<table border = '1' class = "table">
      		<tr><th>First Name</th><th>Last Name</th><th>Gender</th><th>Email</th>
      		<th>Patient Description</th><th>Appointment Date</th><th>Time</th>
      		<th>Selected Therapy</th><th>Action</th></tr>
          <?php
            while($row=$results->fetch_assoc()){
              while($ro=$rs->fetch_assoc(){}
              echo "<tr>";
  	          echo "<td>".$ro['f_name']."</td>";
  	          echo "<td>".$ro['l_name']."</td>";
              echo "<td>".$ro['gender']."</td>";
              echo "<td>".$ro['email']."</td>";
              echo "<td>".$row['prob']."</td>";
              echo "<td>".$row['date']."</td>";
              echo "<td>".$row['time']."</td>";
              echo "<td>".$row['thr_typ']."</td>";
	      		  echo '<td><a href="delete.php?a_id='.$row['d_id'].'" Onclick="ConfirmDelete(event)""'>Cancel</a></td>'';
      		    echo "</tr>";
            }
        }
        ?>
          
      	</table>
      </div>
      <div class = "col-sm-2"></div>
    </div>
  </div>
</section>

  <!-- Bootstrap core JavaScript -->
  <script src = "vendor/jquery/jquery.min.js"></script>
  <script src = "vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>
