<?php
include_once 'server.php';
if(count($_POST)>0) {
mysqli_query($db,"UPDATE register_table set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "',username='" . $_POST['username'] . "',password='" . $_POST['password'] . "' WHERE id='" .$_SESSION['id'] . "'");
header('location: index1.php');
$message = "Record Modified Successfully";
}
else{
    
$result = mysqli_query($db,"SELECT * FROM register_table WHERE id='" .$_SESSION['id'] . "'");
$row= mysqli_fetch_array($result);

}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<title>Update  Data</title>
<style>
nav{
  margin-top: -32px;
}
.navbar-nav{
            padding-left: 301px;
           
         
        }
        .navbar-brand {
            font-size: 40px !important;
            font-family: 'Courier New', Courier, monospace !important;
            color: aquamarine !important;
            color:rgb(199, 27, 27);
        }
      
        .icon_class {
            height: 60px;
            padding-right: 20px;
        }
        .nav-item a {
            font-size: 25px !important;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(199, 27, 27) !important;
        }

        .icon_class {
            height: 60px;
            padding-right: 20px;
        }
body{

  background: url("img/header.png") center center no-repeat;
  background-size: cover;
  height: 150vh;
  display: grid;
  align-items: center;
  justify-items: center;
  font-size: 12pt;
  font-family: "Spartan";
  color: #2A293E;
}
form{
  margin-left: 138px;
  margin-top:-943px;
 
}
  h3 {
    color:white;
  font-weight: normal;
  font-size: 40pt;
  line-height: 24pt;
  font-style: italic;
  margin: 0 0 657px 0;
  padding:0px 0px 0px 0px;

}

h5{
  color:white;
  align-items: center;
  font-weight: normal;
  font-size: 20pt;
  line-height: 24pt;
  font-style: italic;
  margin: 67px 0 -77px -134;
  padding-right: 34px;

}


label, input, textarea {
  display: block;
  width: 100%;
  font-size: 12pt;
  line-height: 24pt;
  font-family: "Spartan";
}

input {
  margin-bottom: -31pt;
}

input, textarea {
  border: none;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 2px;
  background: #f8f4e5;
  padding-left: 5px;
  outline: none;
}

input:focus, textarea:focus {
  border: 1px solid #6bd4b1;
}

.buttom {
  display: block; 
  cursor: pointer;
  float: center center;
  line-height: 24pt;
  padding: 0 20px;
  border: none;
  background: #f45702;
  color: white;
  letter-spacing: 2px;
  transition: 0.2s all ease-in-out;
  border-bottom: 2px solid transparent;
  outline: none;
  margin-left:-98px;
  margin-top: 20px;
}
.buttom:hover {
  background: inherit;
  color: #f45702;
  border-bottom: 2px solid #f45702;
}

.my_class{
    background-color: black;
    color:white;

}
.footer-copyright{
    background-color: rgb(122, 120, 120);
}
.footer-copyright a{
    color:white
}

</style>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-dark">
     <img src="img/ico.jpg" class="icon_class">
  <a class="navbar-brand" href="#">Blood bank System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="pricing.php">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="update-process.php">Edit profile</a>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  <h3>Update Your Profile</h3>


<form name="frmUser" method="post" action="update-process.php" enctype="multipart/form-data">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
<br>
<h5>Name:</h5> <br><br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
<br>

<h5>Email:</h5><br><br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br><br>

<h5>Username:</h5><br><br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br><br>

<h5>Password:</h5><br><br>
<input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
<br>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>



</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</html>



