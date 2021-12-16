<?php
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
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
      <title>Testimoni Visitor</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/logo/LOGO 1.9.png" type="image/png" />
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
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- Google font -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">  -->
      <!-- Custom stlylesheet -->
      <link type="text/css" rel="stylesheet" href="css/insert.css" />
      <!-- CK Editor -->
      <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page contact_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="dashboardvis.php"><img class="logo_icon img-responsive" style="width: auto;" src="images/logo/status.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo/user.png" alt="#" /></div>
                        <div class="user_info">
                           <h6><?=$_SESSION['nama']?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li ><a href="dashboardvis.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li><a href="mdpvis.php"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                     <li><a href="testimoni.php"><i class="fa fa-comments-o red_color"></i> <span>Testimoni</span></a></li>
                     <li><a href="commentVisitor.php"><i class="fa fa-thumbs-o-up green_color"></i> <span>Comment</span></a></li>
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
                           <a href="dashboardvis.php"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/logo/user.png" alt="#" /><span class="name_user"><?=$_SESSION['nama']?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profilevis.php">My Profile</a>
                                       <a class="dropdown-item" href="settingsvis.php">Settings</a>
                                       <a class="dropdown-item" href="help.php">Help</a>
                                       <a class="dropdown-item" href="../pages/logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
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
                              <h2>Testimoni User</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-lg-12">
                           <div class="white_shd full margin_bottom_30" style="background-image: url('images/layout_img/pattern_h.png');">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Testimoni</h2>
                                 </div>
                              </div>
                              <div class="contain mx-5 mt-3">
                                 <div class="section-center">
                                       <!-- <div class="container"> -->
                                          <div class="row">
                                             <div class="booking-form mx-auto">
                                                <form method="POST">
                                                   <div class="form-group">
                                                      <span class="form-label">Name</span>
                                                      <input class="form-control" name="name" type="text" placeholder="Masukkan Nama Anda" required="">
                                                   </div>
                                                   <div class="form-group">
                                                      <span class="form-label">E-Mail</span>
                                                      <input class="form-control" name="email" type="email" placeholder="Masukkan E-Mail Anda" required="">
                                                   </div>
                                                   <div class="form-group">
                                                      <span class="form-label">Date</span>
                                                      <input class="form-control" name="date" type="date" placeholder="Masukkan Tanggal Hari Ini" required="">
                                                   </div>
                                                   <div class="form-group">
                                                      <span class="form-label">Testimoni</span>
                                                      <textarea name="test" id="test">
                                                         Berikan Testimoni Anda !!!
                                                      </textarea>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-sm-6">
                                                         <div class="form-btn mx-auto">
                                                            <button type="submit" class="btn btn-outline-success btn-lg mr-3" name="buttonins"><i class="fa fa-check-circle orange_color"></i> SAVE</button>
                                                            <button type="button" class="btn btn-outline-danger btn-lg" name="buttoncnc" href="dashboardvis.php"><i class="fa fa-times orange_color"></i> CANCEL</button>
                                                         </div>
                                                      </div>
                                                   </div>

                                                   <?php
                                                   require_once'../includes/koneksi.php';
                                                   
                                                   
                                                   if(isset($_POST['buttonins'])){
                                                      $nama = $_POST['name'];
                                                      $email = $_POST['email'];
                                                      $tanggal = $_POST['date'];
                                                      $comment = $_POST['test'];

                                                      $sql = "INSERT INTO komentar (nama, email, tanggal, comment) VALUES ('$nama','$email','$tanggal','$comment')";
                                                         
                                                   if($koneksi->query($sql)===TRUE){
                                                      echo "<script>setTimeout(\"location.href = 'dashboardvis.php';\",1500);</script>";
                                                   } else {
                                                   echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                                   }  
                                                   }
                                                   ?>
                                                </form>
                                             </div>
                                          </div>
                                       
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- footer -->
                     <div class="container-fluid">
                        <div class="footer">
                           <p>Copyright © 2021 Designed by UD. SATU 7AN. All rights reserved.<br><br>
                              Distributed By: <a href="#">UD. SATU 7AN</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <!-- end dashboard inner -->
               </div>
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
      <script src="js/custom.js"></script>
      <!-- calendar file css -->     
      <script src="js/semantic.min.js"></script>
      <script>
         CKEDITOR.replace( 'test',{
               uiColor: '#f78a09',
         } );
      </script>
   </body>
</html>