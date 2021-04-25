<?php
session_start();
include "connect.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Events</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stylesdp.css">
  <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    body{
      background: linear-gradient(to right,#e1eec3,#f05053);
      font-family: 'Montserrat', sans-serif;

    }
</style>
</head>
<body>
  <?php
  if (isset($_SESSION['uid'])) {
   ?>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="donindex.php" class="navbar-brand">
    <!-- Logo Image -->
    <img src="img/logo.jpg" width="45" alt="" class="d-inline-block align-middle mr-2">
    <!-- Logo Text -->
    <span class="text-uppercase font-weight-bold">Blood+</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
      <a class="nav-link" href="donindex.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="aboutus(donor).php">About Us</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why Donate?</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="whydonate(donor).php">Why donate?</a>
        <a class="dropdown-item" href="whydonate2(donor).php">Who can donate?</a>
      </div>
    </li>
    <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News & Events</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="donornews.php">News</a>
        <a class="dropdown-item active" href="donorevent.php">Events</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bloodbanklocation.php">Blood Drives</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="a#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="make_appointment.php"></i>Make appointment</a>
         <a class="dropdown-item" href="donprofile.php"></i>Profile</a>
         <a class="dropdown-item" href="feedback(donor).php"></i>Give Feedback</a>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="logout.php"><i class='fas fa-sign-out-alt'></i>Logout</a>
     </li>
  </ul>
  </div>
</nav>
</header>

    <div class="container" id="page-content" style="padding-top:20px;">
    <h1><b>Blood Donation Events</b></h1>
    <hr class="my-4">
    <?php
    $query = "SELECT * FROM events";
    $result = mysqli_query($conn, $query) or die("Query Error!".mysqli_error($conn));
        while ($eventsinfo = mysqli_fetch_array($result)) {
    ?>
    <div class="content" style="padding-bottom:15px;">
      <div class='card border-0 shadow'>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid mb-3 mb-md-0" style="height:350px; width:700px;" src=<?php print $eventsinfo['photo_path']?>  alt="image">
          </a>
        </div>
        <div class="col-md-5">
          <div class='card-body text-center'>
          <h3><b><?php print $eventsinfo['eve_name']?></b></h3>
          <hr class="my-4">
          <h4><b>Date:</b><?php print $eventsinfo['eve_date']?> <b>Time:</b><?php print $eventsinfo['eve_time']?></h4>
          <p><?php print $eventsinfo['eve_description']?></p>
          Click here for the <a href=<?php print $eventsinfo['eve_location_link']?>><button type="button" value="Location" class="btn btn-info" role="button">Location</button></a></p>
        </div>
        </div>
      </div>
    </div>
  </div>
     <?php
      }
      mysqli_free_result($result);
       ?>
    </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white">
     <div class="container text-center">
       <small>Copyright &copy; BloodPlus.com /<i> designed by Blood Plus Founders</i></small>
     </div>
    </footer>
  <?php
     }
    else {
      echo "Please login to proceed.";
      header( "refresh:3;url=login.html" );
     }
  ?>
</body>
</html>
