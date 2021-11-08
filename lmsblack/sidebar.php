
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class = 'bx bx-bell icon'></i>
        <div class="logo_name">Online Library</div>
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
        <a href="book.php">
          <i class='bx bx-book' ></i>
          <span class="links_name">BOOKS</span>
        </a>
        <span class="tooltip">BOOKS</span>
      </li>
     <li>
      <a href="signin.php">
        <i class='bx bx-book-content' ></i>
        <span class="links_name">Sign In</span>
      </a>
      <span class="tooltip">Sign In</span>
    </li>
    <li>
      <a href="signup.php">
        <i class='bx bx-book-content' ></i>
        <span class="links_name">Sign Up</span>
      </a>
      <span class="tooltip">Register User</span>
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
  <script src="js/script.js"></script>
</body>
</html>
