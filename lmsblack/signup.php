<?php
    include("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="./style1/style.css">
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
     <li class="profile">
         <div class="profile-details">
           <img src="./images/logo2.png" alt="profileImg">
           <div class="name_job">
             <div class="name">Sorsogon State University</div>
             <div class="job">Bulan Campus</div>
           </div>
         </div>
     </li>
    </ul>
  </div>
  <div class="container">
    <div class="banner">
      <img src="./images/ssc.jpg">
       <div class="Registration">
    <div class="title">Registration</div>
    <div class="content">
      <form action="index.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="Name" placeholder="Enter your first name" required>
          </div>
           <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="Email" placeholder="Enter your Email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="PhoneNumber" placeholder="Phone Number" required>
          </div>
          <div class="input-box">
            <span class="details">ID-Number</span>
            <input type="text" name="RollNo" placeholder="Student/Faculty ID-Number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input class="pswrd" type="password" name="Password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" value="Student" name="Category" id="dot-1">
          <input type="radio" value="Faculty" name="Category" id="dot-2">
          <span class="gender-title"><h3>Category</h3></span>
          <div class="category">
            <br></br>
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Student</span>
          </label>
          <br></br>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Faculty</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="signup" value="Register">
        </div>
        <div class="signup_link">
          Already a member? <a href="login.php">Log In</a>
        </div>
      </form>
    </div>
  </div>
    </div>
  </div>
  <?php
if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$mobno=$_POST['PhoneNumber'];
	$rollno=$_POST['RollNo'];
	$category=$_POST['Category'];
	$type='Student';

	$sql="insert into LMS.user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}

?>
</body>
<script src="scripts/script.js"></script>
</html>
