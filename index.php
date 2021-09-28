<?php
session_start();


// commeted by abhishek aravndan

if(isset($_SESSION['uname'])){
	header("location: account.php");
}


if(isset($_POST['log']))
{
	include("db.php");
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	if(empty($uname)){
		$msg = "*Please Enter Email*";
		//die();

	}
	else if(empty($pass)){
		$msg = "*Please Enter Password*";
		//die();

	}
	else{
		$str="select * from users where EMAIL='$uname'";
		$res=$conn->query($str);


		if ($res->num_rows > 0){
			while($res1 = $res->fetch_assoc()){
				if (password_verify($pass, $res1['PASSWORD'])){


	            	$_SESSION['uname']=$res1['EMAIL'];
					header("location:account.php");
				}
				else{
					$msg = "*Sorry login failed check Password*";
				}
	        }
	    }

		else{
			$msg = "*Sorry login failed check again*";
		}
	}

}
?>
<!-- This is home page with a form to login-->
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
		<div class="container">
			<div class="main_box">
				<div class="leftpart">
				<center>
					<caption><h2>Login</h2></caption><br>

						<a href="https://www.facebook.com/"><i class="fa fa-facebook" id="fb-icon"></i></a>&nbsp;
						<a href="https://twitter.com/LOGIN"><i class="fa fa-twitter" id="twitter-icon"></i></a>
						<p>or use your account</p>
						<form id="login" method="post" action="index.php">
							<input type="text" name="username" id="uname" placeholder="Email">
							<br><br>
							<input type="password" name="password" id="pass" placeholder="Password">
							<div id="errors">
		 						<?php echo $msg; ?>
							</div><br>
							<label>New User?</label>
							<a href="register.php" id="reg-link">Register</a> <br><br>
							<input type="submit" name="log" id="log" value="Log in">
						</form>
				</center>
				</div>
				<div class="rightpart">

				</div>
			</div>
		</div>


	</body>
</html>
