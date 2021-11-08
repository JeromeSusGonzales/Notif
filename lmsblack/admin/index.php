<?php
require('dbconn.php');
?>
<?php
if ($_SESSION['RollNo']) {
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
          <a href="index.php">
            <i class='bx bx-home-circle'></i>
            <span class="links_name">HOME</span>
          </a>
          <span class="tooltip">HOME</span>
        </li>
        <li>
          <a href="message.php">
            <i class='bx bx-envelope'></i>
            <span class="links_name">Messages</span>
          </a>
          <span class="tooltip">Messages</span>
        </li>
        <li>
          <a href="student.php">
            <i class='bx bx-user'></i>
            <span class="links_name">Manage Students</span>
          </a>
          <span class="tooltip">Manage Students</span>
        </li>
        <li>
          <a href="book.php">
            <i class='bx bx-book'></i>
            <span class="links_name">All Books</span>
          </a>
          <span class="tooltip">All Books</span>
        </li>
        <li>
          <a href="addbook.php">
            <i class='bx bx-plus'></i>
            <span class="links_name">Add Books</span>
          </a>
          <span class="tooltip">Add Books</span>
        </li>
        <li>
          <a href="requests.php">
            <i class='bx bx-info-circle'></i>
            <span class="links_name">Issue/Return Requests</span>
          </a>
          <span class="tooltip">Issue/Return Requests</span>
        </li>
        <li>
          <a href="recommendations.php">
            <i class='bx bx-repost'></i>
            <span class="links_name">Book Reservation</span>
          </a>
          <span class="tooltip">Book Reservation</span>
        </li>
        <li>
          <a href="current.php">
            <i class='bx bx-book'></i>
            <span class="links_name">Currently Issued Books</span>
          </a>
          <span class="tooltip">Currently Issued Books</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-bell'></i>
            <span class="links_name">Send Notification</span>
          </a>
          <span class="tooltip">Send Notification</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-bell'></i>
            <span class="links_name">Archive</span>
          </a>
          <span class="tooltip">Archive</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="../images/librarian.png" alt="profileImg">
            <div class="name_job">
              <div class="name"></div>
              <div class="job">Profile</div>
            </div>
          </div>
          <form method="post">
            <a href="../index.php" name="logout"><i class='bx bx-log-out' id="log_out"></i></a>
          </form>
        </li>
      </ul>
    </div>
    <div class="container">
      <div class="banner">
        <img src="../images/ssc.jpg">
        <div class="span9"><br>
          <div class="card">
            <img class="card-img-top" src="../images/librarian.png">
            <div class="card-body">

              <?php
              $rollno = $_SESSION['RollNo'];
              $sql = "select * from LMS.user where RollNo='$rollno'";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();

              $name = $row['Name'];
              $category = $row['Category'];
              $email = $row['EmailId'];
              $mobno = $row['MobNo'];
              ?>
              <i>
                <h1 class="card-title"><?php echo $name ?></h1>
                <br>
                <p class="p"><b>ID Number: </b><?php echo $rollno ?></p>
                <br>
                <p class="p"><b>Email ID: </b><?php echo $email ?></p>
                <br>
                <p class="p"><b>Mobile number: </b><?php echo $mobno ?></p>
                <br>
                <p class="p"><b>Category: </b><?php echo $category ?></p>

                </b>
              </i>

            </div>
          </div>
          <br>
          <a href="edit_admin_details.php"><button name="submit1" type="submit"><i class='bx bx-edit'>Edit</i></button></a>


        </div>

      </div>
    </div>
    <script src="./scripts/script.js"></script>
  </body>

  </html>
<?php } else {
  echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>