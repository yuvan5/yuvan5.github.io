<?php
session_start();
include "connect.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
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

.card-footer{
border: 1px solid black;
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
        <a class="dropdown-item active" href="donornews.php">News</a>
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
      <div class="container" id="page-content" style="padding-top:20px;">
        <h1><b>Blood Donation News</b></h1>
        <hr class="my-4">
        <?php
            $query = "Select * from news";//add a new sql query
            $result = mysqli_query($conn, $query);// run the sql query and all the data store in variable result

            if(mysqli_num_rows($result)<=0)//if no result, then run the die () code
            {
              die ("<script>alert('No data from database!');</script>");
            }

            //if got result, extract the data in $row() array (column by column)
            while ($newsinfo =mysqli_fetch_array($result))
            {
            ?>
            <div class="content" style="padding-bottom:15px;">
              <div class='card border-0 shadow'>
              <div class="row">
                <div class="col-md-7">
                    <img class="img-fluid mb-3 mb-md-0" style="height:450px; width:800px;" src=<?php print $newsinfo['photo_path'];?>  alt="image">
                </div>
                <div class="col-md-5">
                  <div class='card-body text-center'>
                  <h3 class="card-title">Breaking News: <b><?php print $newsinfo['news_title'];?></b></h3>
                  <p class="card-text"><b>Description:</b><p class="card-text"><?php print $newsinfo['news_description'];?></p>
                  <div class="card-footer">
                    <small class="text-muted">Last Updated 3 minutes ago </small>
                    <br>
                  </div>
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
