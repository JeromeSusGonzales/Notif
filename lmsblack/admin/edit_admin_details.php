<?php
ob_start();
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
          <div class="module">
            <div class="module-head">
              <h3>EDIT ADMIN DETAILS</h3>
            </div>
            <div class="module-body">


              <?php
              $rollno = $_SESSION['RollNo'];
              $sql = "select * from LMS.user where RollNo='$rollno'";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();

              $name = $row['Name'];
              $email = $row['EmailId'];
              $mobno = $row['MobNo'];
              $pswd = $row['Password'];
              ?>

              <form class="form-horizontal row-fluid" action="edit_admin_details.php?id=<?php echo $rollno ?>" method="post">
                <div class="control-group">
                  <label class="control-label" for="Name"><b>Name:</b></label>
                  <div class="controls">
                    <input type="text" id="Name" name="Name" placeholder="Insert Name" value="<?php echo $name ?>" class="span8" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="EmailId"><b>Email Id:</b></label>
                  <div class="controls">
                    <input type="text" id="EmailId" name="EmailId" placeholder="Insert Email" value="<?php echo $email ?>" class="span8" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="MobNo"><b>Mobile Number:</b></label>
                  <div class="controls">
                    <input type="text" id="MobNo" name="MobNo" placeholder="Mobile Number" value="<?php echo $mobno ?>" class="span8" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="Password"><b>New Password:</b></label>
                  <div class="controls">
                    <input type="password" id="Password" name="Password" placeholder="Enter Password" value="<?php echo $pswd ?>" class="span8" required>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" name="submit" id="btn">Update</button>
                  </div>
                </div>

              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
    <script src="./scripts/script.js"></script>
    <?php
    if (isset($_POST['submit'])) {
      $rollno = $_GET['id'];
      $name = $_POST['Name'];
      $email = $_POST['EmailId'];
      $mobno = $_POST['MobNo'];
      $pswd = $_POST['Password'];

      $sql1 = "update LMS.user set Name='$name', EmailId='$email', MobNo='$mobno', Password='$pswd' where RollNo='$rollno'";



      if ($conn->query($sql1) === TRUE) {
        echo "<script type='text/javascript'>alert('Success')</script>";
        header("Refresh:0.01; url=index.php", true, 303);
      } else { //echo $conn->error;
        echo "<script type='text/javascript'>alert('Error')</script>";
      }
    }
    ?>

  </body>

  </html>
<?php } else {
  echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>