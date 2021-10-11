<?php
 	session_start();   // session starts with the help of this function 
 
  	if(!isset($_SESSION['uname'])) // If session is not set then redirect to Login Page
   	{
       header("location:index.php");  
   	}

   	$email=$_SESSION['uname'];

?>

<!--This html page is for displaying the account page with a 10 second counter-->
<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body  onload="counter()">
	<div class="root-div">
		<center>
		<h2>Hello <?php echo $email; ?> </h2>
		<h4>Our Service will be ready in <span id="countdown"></span></h4>
		<br><a href="logout.php" id= "logout-link">Logout</a>
		</center>
	</div>
</body>
</html>
