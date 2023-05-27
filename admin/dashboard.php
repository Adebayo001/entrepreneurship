<?php include("../db.php"); ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION['email'])){
   header("Location: ../");
}
 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Osun State University</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li>
                        <a href=""><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li><a href="logout.php"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href=""><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a href="logout.php"><i class="fa fa-sign-out"><span>Log Out</span></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <?php
                     $student = 6425;
                  $query = "SELECT * FROM students";
                  $fetch_query = mysqli_query($connection, $query);
                  $count = mysqli_num_rows($fetch_query);
               ?>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $student; ?></p>
                                    <p style="font-size:15px; font-weight:500; color:#000;" class="head_couter">Total Number of Students</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $count; ?></p>
                                    <p style="font-size:15px; font-weight:500; color:#000;" class="head_couter">Number of Students Registered</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $student - $count; ?></p>
                                    <p style="font-size:15px; font-weight:500; color:#000;" class="head_couter">Number of Students Not Register</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Students Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-dark table-striped">
                                       <thead>
                                          <tr>
                                          <th>#</th>
                                             <th>Matric No</th>
                                             <th>Full Name</th>
                                             <th>Campus</th>
                                             <th>College</th>
                                             <th>Faculty</th>
                                             <th>Department</th>
                                             <th>Status</th>
                                             <th>Level</th>
                                             <th>Session</th>
                                             <th>Semester</th>
                                             <th>State</th>
                                             <th>LGA</th>
                                             <th>Training Centre</th>
                                             <th>Training Address</th>
                                             <th>Trainer Name</th>
                                             <th>Trainer Phone</th>
                                             <th>Duration</th>
                                             <th>Work Nature</th>
                                             <th>Image</th>
                                          </tr>
                                       </thead>
                                       <?php
                                       if(isset($_GET['page_no']) && $_GET['page_no']!=""){

                                          $page_no = $_GET['page_no'];

                                       } else {
                                          $page_no = 1;
                                          }
                                             $totalpage = 25;
                                             $offset = ($page_no-1) * $totalpage;
                                             $nextpage = $page_no + 1;
                                             $previouspage = $page_no - 1;
                                             $adjacent = 2;
                                             $query = "SELECT * FROM students";
                                             $fetch_query = mysqli_query($connection, $query);
                                             $count = mysqli_num_rows($fetch_query);

                                             $number_of_pages = ceil($count/$totalpage);
                                             $second_last = $number_of_pages - 1;

                                             $addquery = "SELECT * FROM `students` LIMIT {$offset}, {$totalpage}";
                                             $result = mysqli_query($connection, $addquery);
                                             while($row = mysqli_fetch_array($result)){
                                                $id = $row['id'];
                                                $matric = $row['matric_no'];
                                                $fullname = $row['full_name'];
                                                $campus = $row['campus'];
                                                $college = $row['college'];
                                                $faculty = $row['faculty'];
                                                $department = $row['department'];
                                                $std_status = $row['std_status'];
                                                $std_level = $row['std_level'];
                                                $session = $row['session'];
                                                $semester = $row['semester'];
                                                $state = $row['state'];
                                                $lga = $row['lga'];
                                                $training_centre = $row['training_centre'];
                                                $training_address = substr($row['training_address'], 0, 15);
                                                $trainer_name = $row['trainer_name'];
                                                $trainer_phone = $row['trainer_phone'];
                                                $training_duration = substr($row['training_duration'], 0, 15);
                                                $nature_of_work = $row['nature_of_work'];
                                                $image = $row['image']; 
                                          ?>
                                       <tbody>
                                          <tr>
                                             <td><?php echo $id ?></td>
                                             <td><?php echo $matric ?></td>
                                             <td><?php echo $fullname ?></td>
                                             <td><?php echo $campus ?></td>
                                             <td><?php echo $college ?></td>
                                             <td><?php echo $faculty ?></td>
                                             <td><?php echo $department ?></td>
                                             <td><?php echo $std_status ?></td>
                                             <td><?php echo $std_level ?></td>
                                             <td><?php echo $session ?></td>
                                             <td><?php echo $semester ?></td>
                                             <td><?php echo $state ?></td>
                                             <td><?php echo $lga ?></td>
                                             <td><?php echo $training_centre ?></td>
                                             <td><?php echo $training_address.'..' ?></td>
                                             <td><?php echo $trainer_name ?></td>
                                             <td><?php echo $trainer_phone ?></td>
                                             <td><?php echo $training_duration ?></td>
                                             <td><?php echo $nature_of_work.'..' ?></td>
                                             <td><img width="50px" src="../images/<?php echo $image ?>"></td>
                                          </tr>
                                       </tbody>
                                       <?php } ?>
                                    </table>
                                 </div> <br>
                                 <nav aria-label="Page navigation example">
                                 <ul class="pagination justify-content-center">
                                    <?php if($page_no > 1){
                                    echo "<li class='page-item'><a class='page-link' href='?page_no=1'>First Page</a></li>";
                                    } ?>
                                       
                                    <li class='page-item' <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                                    <a class='page-link' <?php if($page_no > 1){
                                    echo "href='?page_no=$previouspage'";
                                    } ?>>Previous</a>
                                    </li>
                                       <?php
                                    if ($number_of_pages <= 10){  	 
	for ($counter = 1; $counter <= $number_of_pages; $counter++){
	if ($counter == $page_no) {
	echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
	        }else{
        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                }
        }  
} elseif ($number_of_pages > 10) {
   if($page_no <= 4) {			
      for ($counter = 1; $counter < 8; $counter++){		 
        if ($counter == $page_no) {
           echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
           }else{
                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                     }
     }
     echo "<li class='page-item'><a class='page-link'>...</a></li>";
     echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
     echo "<li class='page-item'><a class='page-link' href='?page_no=$number_of_pages'>$number_of_pages</a></li>";
     }
  } else {
   echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
   echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
   echo "<li class='page-item'><a class='page-link'>...</a></li>";
   for (
        $counter = $number_of_pages - 6;
        $counter <= $number_of_pages;
        $counter++
        ) {
        if ($counter == $page_no) {
      echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
      }else{
           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
      }                   
        }
   } 

?>
                                    <a class='page-link' <?php if($page_no < $number_of_pages) {
                                    echo "href='?page_no=$nextpage'";
                                    } ?>>Next</a>
                                    </li>

                                    <?php if($page_no < $number_of_pages){
                                    echo "<li><a class='page-link' href='?page_no=$number_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                                    } ?>
</ul>
</nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2023 Centre for Entrepreneurship. Osun State University.<br><br>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/chart_custom_style1.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>