<?php
include("db.php");
		
		
if(isset($_POST['log']))
{	
	$mail=$_POST['username'];
    $pass=$_POST['password'];
	if(empty($mail)){
		$msg="*Please Enter Email id*";
	
			
	}
	else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$msg="*Please Enter a valid email*";
		
	}
	else if(empty($pass)){
		$msg="*Please Enter a password*";
		
			
	}
	else{
     	
		$re=$conn->query("select * from users where EMAIL='".$mail."'");
		if($re->num_rows > 0)
		{
			$msg="*Sorry! This mail id already exist*";
	       
		}
		else{
			$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
			$query=$conn->query("INSERT INTO users( EMAIL, PASSWORD) VALUES ('$mail','$hashed_password')");
		
			if($query)
			{
			?>
			<script>
			alert("Registration success");
			window.location="index.php";
			</script>
			<?php
			}
		
			else
			{   
			$msg="*Registration failed*";
			}
	mysqli_close($conn);
		}	
	}
}

?>     
<!-- This is a link from home page to register --> 
<!DOCTYPE html>    
<html>    
<head>    
    <title>Register Form</title>    
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
	
	
</head>    
	<body> 
		<div class="container"> 
			<div class="main_box"> 
				<div class="leftpart">
				<center>       
					<caption><h2>Regiser</h2></caption><br>
    
					<a href="https://www.facebook.com/"><i class="fa fa-facebook" id="fb-icon"></i></a>&nbsp;
					<a href="https://twitter.com/LOGIN"><i class="fa fa-twitter" id="twitter-icon"></i></a>
					<p>or use your account</p>
					<form id="login" method="post" action="register.php">     
						<input type="text" name="username" id="uname" placeholder="Email">    
						<br><br>        
						<input type="password" name="password" id="pass" placeholder="Password">    
							<div id="errors">
								<?php echo $msg; ?>
							</div><br>
						<label>Already have an account</label>
						<a href="index.php" id="login-link">Login</a><br><br>
						<input type="submit" name="log" id="log" value="Register"/> 
					</form>
				</center>
				</div>
				<div class="rightpart">
				
				</div>
			</div>
		</div>             	

</body>
</html>