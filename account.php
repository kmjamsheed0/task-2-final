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
<body class="acc_body" onload="counter()">
	<center>
		<h2 class="acc_h2">Hello <?php echo $email; ?> </h2>
		<h3>Our Service will be ready in </h3><p class="acc_para" id="countdown"></p>
		<br><a href="logout.php" id= "logout-link">Logout</a>
	</center>
</body>
</html>
