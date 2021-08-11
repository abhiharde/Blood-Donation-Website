<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	   body{
		   background-image: url("img/header.png");
		   background-size: cover;
			background-repeat: no-repeat;
	   }
	   .input-group {
	margin: 10px 0px 30px 109px;
}
form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
	   @media (max-width:1000px){
		   .num{
			   padding-left:2px;
		   }
		   .header{
			   position: relative;
			   width:60%;
		   }
		   form, .content{
			   position: relative;
			   width:60%;
		   }
		   .input-group {
	margin: 10px 0px 30px 61px;
}
body{
	background-size: 1600px;
	
}

	   }
	</style>
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input class="num" type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input class="num" type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>