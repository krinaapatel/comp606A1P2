<?php
    session_start();
    $num = $_SESSION ['rannum'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv = "Content-type" content = "text/html; charset=utf-8">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, initial-scale=1">
 	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<section class = "randomimg text-white text-center">
    <div class = "overlay"></div>
        <a href = "login.html" class = "text-white" > Back to Home</a>
    </div>
</section>

<section class = "section-wrap margin40">
	<div class = "container">
		<div class = "row"><h3 class = "text-center">Sports Massage Therapist System</h3></div>
	</div>
</section>
<section class = "section-wrap">
    <div class = "random-section">
		<span class = "">Your randoom Password is  <?php echo "$num"; ?> </span>
	</div>
</section>
<?php
    unset($_SESSION['rannum']);
 ?>
</body>
</html>