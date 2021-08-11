<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

	<title>blood donation camp regestration</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		body{
			background-image: url("img/header.png");
			background-size: cover;
			background-repeat: no-repeat;
		

		}
		.num{
			margin-left: 196px;
		}
		form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
		@media (max-width: 1000px){
			.header{
				width:66%;
			}
			form, .content{
				width:66%;
			}
			body{
				background-size: 1200px;
				
			}
		
			}

			
		
		@media (max-width: 570px){
			.num{
				margin-left:135px;
			}
		}
		@media (min-width: 570px) AND (max-width:1000px){
			.num{
				margin-left:140px;
			}
		
		}
		@media(min-width:700px) and (max-width:1200px){
			.header {
	           width: 36%;
			}
			form, .content{
				width:30%;
			}
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<label>Name</label>
			<input id="cl" class="num" type="text" name="name">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input  class="num" type="email" name="email">
		</div>

		<div class="input-group">
			<label>Username</label>
			<input class="num" type="text" name="username"  value="<?php echo $username; ?>">
	</div>
		<div class="input-group">
			<label>Password</label>
			<input class="num" type="password" placeholder="Ex.rahJA34@" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input class="num" type="password" name="password_2">
		</div>
	

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>