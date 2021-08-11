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
        .navbar-nav{
            padding-left: 300px;
         
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
        .dropdown-menu{
          margin-left: -29px;
        }

        .my_card_css {
            background-color: #00FFFF;
        }
        
        @media (min-width:10px) and (max-width: 1266px){
        
            .nav-link{
              margin-left:-120px;
            }
       
        }
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    include "server.php";
?> 
<body>
    <!-- <div class="topnav">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Eligiblity</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li id="border" style="float:right"><a href="login.html">Login</a></li>
            <li id="border" style="float:right"><a href="/register/register.html">Register</a></li>
        </ul>

    </div> -->
   

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

    
    <div class="container pt-4">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Enter Blood Group" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          
        <h1 class="text-center">Pricing Table</h1>

          <table class="table pt-4">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Price/ml</th>
                <th scope="col"> registered for donate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>A+</td>
                <td>100</td>
                <td>
                  <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='A+'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?>
                  </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>B+</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='B+'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>AB+</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='AB+'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>O+</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='O+'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>A-</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='A-'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>B-</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='B-'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>AB-</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='AB-'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>O-</td>
                <td>100</td>
                <td> <?php
                   $query = "SELECT * FROM `donate_table` WHERE bloodgroup='O-'"; 
                   $result = mysqli_query($db, $query); 
                    echo $row = mysqli_num_rows($result);
                  ?></td>
              </tr>
            </tbody>
          </table>
    </div>


    
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