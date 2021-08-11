<?php 
include('server.php');
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

?>

<!DOCTYPE html>

<html>

<head>
    <!-- <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    .navbar{
      background-color: black;
   
    }
    .bt{
  width:100px;
}

        .navbar-nav{
            padding-left: 300px;
         
        }
        .feedback h1{
          color:darkred
        }
       
        .dropdown-menu{
          margin-left: -29px;
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

        .my_card_css {
            background-color: #00FFFF;
            margin:90px 0px 0px 160px;
            padding:0px 0px 0px 0px;
        }
       .feedback{
         padding:0px 0px 0px 0px;
         margin:0px 507px 0px 125px;
       }
        .slide{
            margin-top:0px;
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

.line h1{
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
  padding-top:40px;
}
.line2 p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
  padding-left:50px;
  padding-right:50px;
  margin-bottom:90px;
}
body {
    background-color: #ecf0f1;
    width: 100%;
    overflow-x: hidden;
}
.topnav a:hover {
    border-bottom: 3px solid red;
}



   
        @media (min-width:10px) and (max-width: 1266px){
         .my_card_css{
            
            padding-bottom:12px;
            margin-bottom:29px;
            margin-right:auto;
            margin-left:auto;
            

        }
            .nav-link{
              margin-left:-120px;
            }
       
        }
      
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
        



<nav class="navbar navbar-expand-lg navbar-light bg-dark">
     <img src="img/ico.jpg" class="icon_class">
  <a class="navbar-brand bg-dark" href="#">Blood bank System</a>
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
        
          <a class="dropdown-item" name="logout" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <!-- <div cl``````````ass="topnav">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Eligiblity</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li id="border" style="float:right"><a href="login.html">Login</a></li>
            <li id="border" style="float:right"><a href="/register/register.html">Register</a></li>
        </ul>

    </div> -->
  <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="img/ico.jpg" class="icon_class">
        <a class="navbar-brand nav_my_class" href="#">Blood bank System</a>
        <ul class="navbar-nav ml-auto">
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown bgcolor-" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="index1.php">Home</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
               
               
                 <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="edipage2.php">Edit Profile</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="index.php?logout='1'">Logout</a>
                </li>

     </ul> 
        </div>
    </nav>
    -->
 

<body>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>
		
</body>



    <!-- <div id="slider">
        <figure>
            <img src="rahul1.jpg">

        </figure>
    </div> -->

    
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/rahul4.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Blood Donation</h5>
          <p>Your little effort can give some one other chance to live life</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/rahul3.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Blood Donation</h5>
          <p>Your little effort can give some one other chance to live life</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Blood Donation</h5>
          <p>Your little effort can give some one other chance to live life</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


    <div class="container ">
        <div class="row pt-4">
            <div class="col-md-6">

                <div class="card my_card_css" style="width: 18rem;">
                    <img src="img/rahul1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Donate Blood</h5>
                        <a href="donate_blood.php" class="btn btn-outline-dark btn-block">Click here</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card my_card_css" style="width: 18rem;">
                    <img src="img/rahul2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Receive Blood</h5>
                       <!-- <i class="fas fheartbeat"></i> -->
                        <a href="receive_blood.php" class="btn btn-outline-dark btn-block">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="line">
        <h1>Whats Our Aim?</h1>
    </div>
    <div class="line2">
        <p>To connect the people with same blood group with the help of there information.Be a hero, A real hero in someone’s life. There are various myths surrounding the blood donation activities. Actual awareness and right information can really benefit both the donor and recipient. Come forward and join the hands in this initiative.Donating blood is one of the greatest ways to help humankind. By doing so, we save someone’s precious life, and that is a blessing in itself. There are people who hesitate to donate blood if they aren’t given monetary returns or because of the various myths surrounding it.</p>
    </div>
<div class="feedback"><h1>Feedback Form</h1>
<form name="registation" method="POST" action="">
                <div class="form-row">
            
                <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" name="Name" class="form-control" id="inputEmail4" required>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Email:</label>
                        <input type="email" name="Email" class="form-control" id="inputPassword4" required>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">message</label>
                        <input type="text" name="Message" class="form-control" id="inputEmail4" required>
                    </div>
                    </div>
                    <button name="submit" type="submit" class="bt btn-info btn-lg btn-block">Submit</button>
                                

</form>
</div>
<?php
if(isset($_POST['submit']))
  {   
       mysqli_query($db,"INSERT INTO `feedback_table` VALUES('$_POST[Name]','$_POST[Email]','$_POST[Message]');");
    ?>
       <script type="text/javascript">
           window.location = "index1.php";
        </script>
  <?php
  }
?>
 <footer>
     <div class="my_class bg-dark">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-4 pt-4 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">About Us</h6>
          <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Our aim is to help maximum number of people by giving them blood and get maximum number of responce.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
      
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 pt-4 col-lg-3 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="https://en-gb.facebook.com/login/">Facebook</a>
          </p>
          <p>
            <a href="https://www.instagram.com/">Instagram</a>
          </p>
          <p>
            <a href="https://twitter.com/login?lang=en">twitter</a>
          </p>
          <p>
            <a href="https://yahoo.com/">Yahoo</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4  pt-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>676 North Kasba,solapur</p>
          <p> rahuljain2961@gmail.com</p>
          <p>+91911245869</p>
          <p>+91293393485</p>
  
        </div>
        <!-- Grid column   -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
</div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#"> Rahul Jain</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
    <!-- 
    <div class=container>
        <h2>BLOOD DONATION</h2>
        <h3>Yor little effort can give others second chance to live life<h3>
    </div>
    </div>
    <div id="main boxes">
        <div class="boxes">
            <a href="donate">
                <h2>Donate</h2>
            </a>
        </div>
        <div class="box">
            <a href="search">
                <h2>Search Donors</h2>
            </a>
        </div>
    </div>
    <div class="line">
        <h1>Whats Our Aim?</h1>
    </div>
    <div class="line2">
        <p>To connect the people with same blood group with the help of there information</p>
    </div>
    <div class="footer">
        <h2>About Us</h2>
        <p>To help people who are not able to get<br><br> blood because of covid-19 lockdown.<br><br>help people to get
            blood by various people</p>
    </div>
    <div></div>
    <div class="footer2">
        <div class="head">
            <h2>Get In Touch</h2>
            <p>676 north kasba balives,solapur-413007</p>
            <p>Contact No- +9191124565</p>
            <p>rahuljain2961@gmail.com</p>
            <form action="/home.html" method="post">
                <label for=subscirbe>
                    <h2>Subscribe</h2>
                </label>
                <br>
                <input type="text" name="meal">
                <br>
                <button class=button>Subscribe</button>
            </form>
        </div>
    </div> -->
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