<?php
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

if(isset($_POST['send'])){


$mailTo = $_POST['email'];
$body = $_POST['body'];

$mail = new \PHPMailer\PHPMailer\PHPMailer();

$mail -> isSMTP();

$mail ->Host ="mail.smtp2go.com";

$mail ->SMTPAuth = true;

$mail ->Username ="sorsu-library";
$mail ->Password ="library12345";

$mail ->SMTPSecure ="tls";

$mail -> Port = "2525";

$mail -> From = "susjerome26@sorsu.edu.ph";
$mail -> FromName = "SSU-LIBRARY";

$mail -> addAddress($mailTo, "Buroto");

$mail -> isHTML(true);

$mail -> Subject = "Returning of Books";

$mail -> Body = $body;
$mail ->AltBody = "This is the plain text Verion of the email content";

if(!$mail ->send()){
    
    echo " :". $mail ->ErrorInfo;
}else{
    
    echo "";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>notification</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
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
           <img src="../test/images/librarian.png" alt="profileImg">
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
      <div class="gif"><img src="../test/images/mail2.gif"></div>
      <div class="wrapper">
        <header>Notification</header>
        <form method="post">
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="name" placeholder="From:SSU-LIBRARY">
              <i class='fas fa-user'></i>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="To:">
              <i class='fas fa-envelope'></i>
            </div>
          </div>
          <div class="message">
            <textarea placeholder="Write your message"name="body"></textarea>
          </div>
          <div class="button-area">
            <button type="submit" name="send">Send Message</button>
            <span></span>
          </div>
        </form>
      </div>
    
    </div>
  </div>
  <script src="../test/js/script.js"></script>

</body>
</html>
