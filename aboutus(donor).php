<?php
session_start();
include "connect.php";
 ?>
<html>
<title>About Blood +</title>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylesdp.css">
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
    <li class="nav-item active">
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
<div id="page-content">
<section class="about-company-section" >
  <div class="container p-1 p-sm-3">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="AboutUs-Header">About Blood +</h2>
        <hr/>
      </div>

      <!-- <div class="col-md-3">
        <img class="img-fluid" src="img/Blood+ Logo.jpg" alt="Blood + Logo">
      </div> -->
      <center>
      <div class="col-md-9">
        <h5>
          Blood + strives to connect individuals that are willing to donate blood and organisations that are ready to accept it.Organisations spend thousands of dollars
          in advertising and encouraging people to donate blood. Yet, roughly 0.016% of the world's population actually donate blood annually. This is a gigantic waste of
          money to advertise to people that are now willing to donate blood. Blood + solves that by ensuring these blood banks are only connected with individuals that are
          willing and ready to donate blood.
        </h5>
         <h5>
           All of the users within our system have been carefully verified to ensure that our system is trustworthy. Acceptors of these blood donations have to verify themselves
           with their unique SSM id and the blood donors will have to complete a set of questions to verify their medical status. With both parties undergoing careful filtering,
           our system can be utilised without any doubts or reservations. No one should be denied blood transfusion due to unavailability!!
         </h5>
      </div>
      </center>
    </div>
  </div>
</section>

<section class="pt-3 pb-4">
    <div class="container">
        <div class="row mt-4">
          <div class="col text-center">
            <h3 class="members-header">
              The People of Blood +
            </h3>
          </div>
        </div>

        <hr>
        <center>
        <div class="row1">
          <div class="col-md-4 text-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <h4>
                      <b>Yuvan Sarrvesh<b>
                    </h4>

                    <img src="img/Yuvan.png" class="h-50 w-70" alt="...">

                  <div class="quote">
                    <p>
                      <i>"We take great pride in making sure that blood banks are able to rely on our system in order to find blood donors."</i>
                    </p>
                  </div>
                </div>

                <div class="carousel-item">
                  <h4>
                    <b>Vishnu<b>
                  </h4>

                <img src="img/Vishnu.jpg" class="h-50 w-70" alt="...">

                  <div class="quote">
                  <p>
                    <i>"So many individuals lack access to a basic necessity like blood just due to unavailability in a certain region. We aim to solve that issue."</i>
                  </p>
                  </div>
                </div>

                <div class="carousel-item">
                  <h4>
                    <b>Prasanth Nair<b>
                  </h4>

                  <img src="img/Prasanth.jpg" class="h-50 w-70" alt="...">
                  <div class="quote">
                  <p>
                  <i>"Ensuring that blood banks and hospitals are always able to provide blood to people that need it was what drobe us to develop this system."</i>
                  </p>
                  </div>
                </div>

                <div class="carousel-item">
                  <h4>
                    <b>Arkshay<b>
                  </h4>

                  <img src="img/Arkshay.jpg" class="h-50 w-100" alt="...">

                  <div class="quote">
                  <p>
                  <i>"There is nothing more frustrating than blood banks and hospitals struggling to find people to donate blood. Our system aims to solve that."</i>
                  </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </center>
</section>
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
