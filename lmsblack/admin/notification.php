<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>notification</title>
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
                                <li><a href="message.php" style="background-color: maroon; color: white; border-left: maroon"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="student.php" style="background-color: maroon; color: white"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php" style="background-color: maroon; color: white"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php" style="background-color: maroon; color: white"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="requests.php" style="background-color: maroon; color: white"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="recommendations.php" style="background-color:maroon; color: white"><i class="menu-icon icon-list"></i>Book Reservation </a></li>
                                <li><a href="current.php" style="background-color: maroon; color: white"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                                <li><a href="notification.php" style="background-color: maroon; color: white"><i class="menu-icon icon-bell"></i>Send Notification</a></li>
                            </ul>
                        </div> <br><br>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                   <div class="span9"><br>
                        <div class="content">

                         <div class="module">
                            <div class="module-head" style="background-color: maroon">
                                <h3 style="color: white; text-align: center">NOTIFICATION</h3>
                            </div> 
                            <div class="module-body">
                              <div class="container">
    <div class="banner">
      <div class="gif"><img src=""></div>
      <div class="wrapper"  style="background-color: maroon; width: 840px;">
        <header style="margin-left: 50px; color: white">Gmail Notification</header>
        <form action="#">
          <div class="dbl-field">
            <div class="field" style="margin-left: 50px">
              <input type="text" name="name" placeholder="From:">
              <i class='fas fa-user'></i>
            </div>
            <div class="field" style="margin-left: 50px">
              <input type="text" name="email" placeholder="To:">
              <i class='fas fa-envelope'></i>
            </div>
          </div>
          <div class="message" style="margin-left: 50px">
            <textarea placeholder="Write your message" name="message"></textarea>
          </div>
          <div class="button-area" style="margin-left: 50px">
            <button type="submit">Send Message</button>
            <span></span>
          </div>
        </form>
      </div>
    
    </div>
  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

  
  <div class="footer" style=" background-color: maroon">
        </div>

  <script src="scripts/script.js"></script>

</body>

</html>
