<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>List of Books</title>
      
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
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
  <h2 style="color: white; text-align: center; font-size: 40px; background-color: maroon; height: 50px; margin-top: auto;">List of Books</h2>
    <body>
       
                    <div class="container" style="margin-top: 30px;">
                        <form class="form-horizontal row-fluid" action="book.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Name/ID of Book" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from LMS.book where BookId='$s' or Title like '%$s%'";
                                        }
                                    else
                                        $sql="select * from LMS.book order by Availability DESC";

                                    $result=$conn->query($sql);
                                    $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                    
                                    ?>
                        <table class="table" id ="tables">
                                  <thead>
                                    <tr>
                                      <th>Book id</th>
                                      <th>Book name</th>
                                      <th>Availability</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $bookid=$row['BookId'];
                                $name=$row['Title'];
                                $avail=$row['Availability'];
                            ?>
                                    <tr>

                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><b><?php 
                                           if($avail > 0)
                                              echo "<font color=\"green\">AVAILABLE</font>";
                                            else
                                            	echo "<font color=\"red\">NOT AVAILABLE</font>";

                                                 ?>
                                                 	
    
                                      
                                      	<?php
                                      	if($avail > 0)
                                      		
                                        ?>
                                        </td>
                                    </tr>
                               <?php }} ?>
                               </tbody>
                                </table>
                            </div>
                </div>
                </div>
            </div>

       

        <script src="scripts/script.js"></script>
      
    </body>

</html>
