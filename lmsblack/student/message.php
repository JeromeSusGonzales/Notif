<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top" >
            <div class="navbar-inner" style=" background-color: maroon; height: 60px" >
                <div class="container" >
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse" >
                        <i class="icon-reorder shaded">
                        </i></a><a class="brand" href="index.php" style="color: white">Online Library Management System </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrappers" style="background-color: grey">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar"><br><br>
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php" style="background-color: maroon; color: white"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="book.php" style="background-color: maroon; color: white"><i class="menu-icon icon-list"></i>List of All Books</a></li>
                                <li><a href="history.php" style="background-color: maroon; color: white"><i class="menu-icon icon-book"></i>Previously Borrowed Books </a></li>
                                <li><a href="recommendations.php" style="background-color: maroon; color: white"><i class="menu-icon icon-tasks"></i>Book Reservation</a></li>
                                <li><a href="current.php" style="background-color: maroon; color: white"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                                <li><a href="message.php" style="background-color: maroon; color: white; border-left: maroon"><i class="menu-icon icon-inbox"></i>Report of Transaction</a>
                                </li>
                            </ul>
                        </div> <br><br>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9"><br>
                        <div class="content">

                         <div class="module">
                            <div class="module-head" style="background-color: maroon">
                                <h3 style="color: white; text-align: center">REPORT OF TRANSACTION</h3>
                            </div> 
                            <div class="module-body">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th style="background-color: maroon">Message</th>
                                      <th style="background-color: maroon">Date</th>
                                      <th style="background-color: maroon">Time</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $rollno=$_SESSION['RollNo'];
                            $sql="select * from LMS.message where RollNo='$rollno' order by Date DESC,Time DESC";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $msg=$row['Msg'];
                                $date=$row['Date'];
                                $time=$row['Time'];
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo $msg ?></td>
                                      <td><?php echo $date ?></td>
                                      <td><?php echo $time ?></td>
                                    </tr>
                               <?php } ?>
                               </tbody>
                                </table>
                            </div>
                    <!--/.span3-->
                    
                    <!--/.span9-->
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br>
            <!--/.container-->
        </div>
<div class="footer" style=" background-color: maroon">
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>

<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>