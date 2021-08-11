<?php 
	
	session_start(); 
	// variable declaration
	$name="";
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'register1');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name  =  mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		$count=0;
		$sql="SELECT email from `register_table`";
		$res=mysqli_query($db,$sql);
		while($row=mysqli_fetch_assoc($res))
		{
		if($row['email']==$_POST['email'])
		{
			array_push($errors, "This email already exists");
		}
		}


		$count=0;
		$sql="SELECT username from `register_table`";
		$resq=mysqli_query($db,$sql);
		while($row=mysqli_fetch_assoc($resq))
		{
		if($row['username']==$_POST['username'])
		{
			array_push($errors, "This username already exists");
		}
		}





	
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO `register_table` (`name`,`email`,`username`, `password`) 
					  VALUES('$name', '$email','$username', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index1.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM register_table WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		
        
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$row1= mysqli_fetch_array($results);
				$_SESSION['id']= $row1['id'];
				print($row1['id']);
			    VAR_DUMP($_SESSION['username']);
				$_SESSION['success'] = "You are now logged in" ;
				header('location: index1.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>