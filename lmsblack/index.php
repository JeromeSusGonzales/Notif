<?php
require('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>

	<title>Library Management System </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">SSU-BC LIBRARY</div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class='bx bx-home-circle'></i>
          <span class="links_name">HOME</span>
        </a>
         <span class="tooltip">HOME</span>
      </li>
      <li>
        <a href="book.php">
          <i class='bx bx-book' ></i>
          <span class="links_name">BOOKS</span>
        </a>
        <span class="tooltip">BOOKS</span>
      </li>
     <li>
      <a href="login.php">
        <i class='bx bx-log-in-circle' ></i>
        <span class="links_name">SIGN IN</span>
      </a>
      <span class="tooltip">SIGN IN</span>
    </li>
    <li>
      <a href="signup.php">
        <i class='bx bx-edit' ></i>
        <span class="links_name">SIGN UP</span>
      </a>
      <span class="tooltip">SIGN UP</span>
    </li>
     <li class="profile">
         <div class="profile-details">
           <img src="images/logo.png" alt="profileImg">
           <div class="name_job">
             <div class="name" style="font-size: 12px">Sorsogon State University</div>
             <div class="job">Bulan Campus</div>
           </div>
         </div>
     </li>
    </ul>
  </div>  
<div>
  <img class="mySlides" src="images/BG3.jpg">
  <img class="mySlides" src="images/4.jpg">
  <img class="mySlides" src="images/2.jpg">
  <img class="mySlides" src="images/3.jpg">
  
  <script>
    var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2500); // Change image every 2 seconds
}
  </script>
</div>
</body>
<script src="scripts/script.js"></script>

</html>
