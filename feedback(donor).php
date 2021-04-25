<?php
  session_start();
  include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" href="feedback.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="stylesdp.css">
      <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
    .form-box {
        width: 880px;
        height: 563px;
        margin-top: 20px;
        margin-left: 330px;
        background: #fff;
        padding: 5px;
        opacity: 0.8;
    }

    .form-box h1 {
        text-align: center;
        font-family: 'Montserrat';
        font-size: 42px;
        font-weight: 100;
    }

    .form-box2 {
        width: 101.2%;
        height: 75%;
        position: relative;
        top: 5%;
        margin: -5px;
        background: #000000;
        padding: 5px;
    }

    .input-fields {
    padding: 0 30px;
}

.input-fields .items{
    width: 100%;
    padding-bottom: 15px;
}

.input-fields .items .label{
    display: block;
    font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    font-size: 18px;
    color: white;
    transition: all 0.5s ease;
    padding-bottom: 5px;
    padding-top: 15px;
}

.input-fields .items .input,
.input-fields .items .text-area{
    background: transparent;
    border: 0;
    border: 1px solid #ffecb3;
    width: 100%;
    padding: 75px;
    font-size: 1em;
    color: white;
    border-radius: 2px;
}


.button {
        background-color: black;
        color: white;
        border: 2px solid #FFF;
        padding: 5px;
        cursor: pointer;
        width: 10%

}

.button1 {
        font-family: Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: rgb(251, 0, 0);
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;
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
          <li class="nav-item">
            <a class="nav-link" href="bloodbanklocation.php">Blood Drives</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="a#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="make_appointment.php"></i>Make appointment</a>
               <a class="dropdown-item" href="donprofile.php"></i>Profile</a>
               <a class="dropdown-item active" href="feedback(donor).php"></i>Give Feedback</a>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="logout.php"><i class='fas fa-sign-out-alt'></i>Logout</a>
           </li>
        </ul>
        </div>
      </nav>
    </header>

	<div class="content" style="padding-bottom:100px;">
		<div class="form-box"></br>
			<h1>FEEDBACK FORM</h1>

			<form class="form-box2" action="insertfeedback.php" method="post">
				<div class="input-fields">
					<div class="items">
						<label for="msg" class="label">Feedback :</label>
						<textarea id="msg" name="feedback" class="text-area"></textarea>
					</div>
			</div>

			<center><button type="submit" class="button" >Submit</button>
			<button type="reset" class="button">Cancel</button></center>
      </form>
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
