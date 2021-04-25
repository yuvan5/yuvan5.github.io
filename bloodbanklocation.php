<?php
session_start();
include "connect.php";
 ?>
<html>
<title>Blood Bank Locations</title>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="stylesdp.css">
  <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background: linear-gradient(to right,#e1eec3,#f05053);
  font-family: 'Montserrat', sans-serif;
}

.inner{
  overflow: hidden;
}

.inner img{
  transition: all 1.5s ease;
}

.inner:hover img{
  transform: scale(1.1);
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
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News & Events</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="donornews.php">News</a>
        <a class="dropdown-item" href="donorevent.php">Events</a>
      </div>
    </li>
    <li class="nav-item active">
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
<div class="container" style="padding-top:20px;" id="page-content">
  <h1><b>Locations of Blood drives</b></h1>
  <hr class="my-4">
  <div class="row">
      <?php
        include("connect.php");
        $sql = "SELECT * FROM acceptor";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)<=0)
        {
          die("<script>alert('No data from database!');</script.");
        }

        while($rows = mysqli_fetch_array($result))
        {
      ?>
  <div class="col-md-4"  style="margin-bottom:15px;">
      <div class="card border-0 shadow">
        <div class="card-body text-center inner">
          <img class="card-img-top" src="<?php echo $rows ['photo_path'];?>" style="height: 200px; margin-bottom:10px;" alt="Card image cap">
          <h4 class="card-title"><b><?php echo $rows ['acpt_name'];?></b></h4>
          <p class="card-text">Location: <?php echo $rows ['acpt_location'];?></p>
          <p class="card-text">Phone Number: <?php echo $rows ['acpt_phone'];?></p>
          <hr class="my-2">
          <a href="make_appointment.php" class="btn btn-success">Make Appoinment</a>
        </div>
      </div>
      </div>
    <?php }
      mysqli_free_result($result);
      ?>
</div>
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
