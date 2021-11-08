<?php
    session_start(); 
    include("functions.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class = 'bx bx-bell icon'></i>
        <div class="logo_name">Admin</div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-home-circle'></i>
          <span class="links_name">HOME</span>
        </a>
         <span class="tooltip">HOME</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-book' ></i>
          <span class="links_name">BOOKS</span>
        </a>
        <span class="tooltip">BOOKS</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">STUDENT INFO.</span>
        </a>
        <span class="tooltip">STUDENT INFO.</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user-voice' ></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
     <li>
      <a href="#">
        <i class='bx bx-book-content' ></i>
        <span class="links_name">Book Request</span>
      </a>
      <span class="tooltip">Book Request</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-info-circle' ></i>
        <span class="links_name">Issue Information</span>
      </a>
      <span class="tooltip">Issue Information</span>
    </li>
     <li>
       <a href="#">
         <i class='bx bx-repost' ></i>
         <span class="links_name">Returned/Unreturned</span>
       </a>
       <span class="tooltip">Retruned/Unreturned</span>
     </li>
     <li>
      <a href="#">
        <i class='bx bx-bell'></i>
        <span class="links_name">Notification</span>
      </a>
       <span class="tooltip">Notification</span>
    </li>
     <li class="profile">
         <div class="profile-details">
           <img src="../images/librarian.png" alt="profileImg">
           <div class="name_job">
             <div class="name">Monica Fulo</div>
             <div class="job">Librarian</div>
           </div>
         </div>
         <i class = 'bx bx-log-out' id ="log_out"></i>
     </li>
    </ul>
  </div>
  <div class="container">
    <div class="banner">
      <img src="../images/ssc.jpg">
      <form action="" method="post">
      <button name="submit1" type="submit"><i class='bx bx-edit'>Edit</i></button>
      </form>
      <div class="box1">
      <h2>My Profile</h2>
      <h3>Welcome</h3>
      <h4>Admin</h4>
      </div>  
  </div>
  </div>   
  <script src="../js/script.js"></script>
</body>
</html>