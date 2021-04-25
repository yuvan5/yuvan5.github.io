<?php
session_start();
include "connect.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blood+</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="stylesdp.css">
    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
    html{
      scroll-behavior: smooth;
    }
    section {
  position: relative;
  height: 90vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

section video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

@media (pointer: coarse) and (hover: none) {
  section {

  }
  secction video {
    display: none;
  }
}
    .searchbox{
      padding: 20px;
      margin-top: 10px;
      margin-bottom: -50px;

    }
    .col-search{
      margin-left: 15%;
    }
    </style>
  </head>
  <body class="d-flex flex-column">
    <?php
      if (isset($_SESSION['uid'])) {
    ?>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3983A0;">
    <a href="index.php" class="navbar-brand">
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
      <li class="nav-item active">
        <a class="nav-link" href="#quick-access">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus(acceptor).php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="acceptornews.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why Donate?</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="whydonate(acpt).php">Why donate?</a>
          <a class="dropdown-item" href="whydonate2(acpt).php">Who can donate?</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="acceptornews.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News & Events</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="acceptornews.php">News</a>
          <a class="dropdown-item" href="acceptorsevent.php">Events</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search Donor</a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="acptprofile.php">View Profile</a>
           <a class="dropdown-item" href="feedback(acceptor).php">Give Feedback</a>
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
<!-- <div class="shadow p-3 mb-5 bg-white rounded">
  <div class="row" style="padding:10px;">
    <div class="col-sm">
<i class='fas fa-exclamation-triangle' style='font-size:24px;color:red'> Covid-19 update</i><br>Attention to all blood donors, Please keep donating blood as patients are relying on your blood donations. Please do read the<a href="https://www.blood.co.uk/news-and-campaigns/news-and-statements/coronavirus-covid-19-updates/"> latest updates</a> for further information.
</div>
</div>
</div> -->
<section>
<div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="img/bloodvideo.mp4" type="video/mp4">
  </video>
</section>
<form class="searchbox" method="post"action="search.php" id="quick-access">
  <div class="shadow p-3 mb-5 bg-white rounded" style="width:60%; margin-left:20%;">
    <div class="col-search">
      <div class="row">
        <select class="form-control form-control-lg" name="bloodgroup" style="width:250px;">
        <option value=".." hidden>Select blood type</option>
        <option value="O-">O-</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select>&nbsp
        <select class="form-control form-control-lg" name="location" style="width:250px;">
        <option value=".." hidden>Select Location</option>
        <option value="Perlis">Perlis</option>
        <option value="Kedah">Kedah</option>
        <option value="Penang">Penang</option>
        <option value="Kelantan">Kelantan</option>
        <option value="Terengganu">Terengganu</option>
        <option value="Pahang">Pahang</option>
        <option value="Selangor">Selangor</option>
        <option value="Kuala Lumpur">Kuala Lumpur</option>
        <option value="Melaka">Melaka</option>
        <option value="Negeri Sembilan">Negeri Sembilan</option>
        <option value="Johor">Johor</option>
        <option value="Sabah">Sabah</option>
        <option value="Sarawak">Sarawak</option>
        </select>&nbsp
        <button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i> Search</button>&nbsp
      </div>
    </div>
  </div>
</form>

  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner"> -->
      <!-- Slide One - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item active">
        <img class="imgSlider" src="img/donation.jpg" alt="First slide"> -->
        <!-- <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div> -->
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item">
        <img class="imgSlider" src="img/bo2.jpg" alt="First slide"> -->
        <!-- <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div> -->
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item">
        <img class="imgSlider" src="img/b02.jpg" alt="First slide"> -->
        <!-- <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div> -->
      <!-- </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div> -->

<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">
    <small></small>
  </h1>

  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href="https://www.who.int/health-topics/coronavirus"><img class="card-img-top" src="img/cor.jpg" alt="" style="height:350px;"></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">Covid-19</a>
          </h4>
          <p class="card-text">Find out the latest update on the COVID-19 outbreak</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href="acceptornews.php"><img class="card-img-top" src="img/news1.jpg" alt="" style="height:350px;"></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="acceptornews.php">News & Events</a>
          </h4>
          <p class="card-text">Check out the latest news and upcoming events.</p>
        </div>
      </div>
    </div>
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
