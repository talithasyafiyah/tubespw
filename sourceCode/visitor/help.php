<?php
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
   }

require_once '../includes/koneksi.php';

$username = $_SESSION['username'];
$query = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
$row = mysqli_fetch_array($query);
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
      <title>Help</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/logo/LOGO 1.9.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- CSS only -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" >
      <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
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
      <link rel="stylesheet" href="css/btn.css" />
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- Script ChartJS -->
      <script src="js/chart.js"></script>
      <!-- Teks Animasi -->
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/styleAnimasi.css">
      <!-- Komentar -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

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
                     <li class="active">
                        <a href="dashboardvis.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
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
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle" style="height: 62px;"><i class="fa fa-bars"></i></button>
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
                              <h2>HELP</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                                <div class="white_shd full margin_bottom_30" style="background-image: url('images/layout_img/pattern_h.png');">
                                   <div class="full graph_head">
                                      <div class="heading1 margin_0">
                                         <h2>Are You In Trouble ???</h2>
                                      </div>
                                   </div>
                                   <div class="full inner_elements">
                                      <div class="row">
                                         <div class="col-md-12">
                                            <div class="tab_style3">
                                               <div class="tabbar padding_infor_info">
                                                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                     <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">About Us</a>
                                                     <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Contact Us</a>
                                                     <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Help Center</a>
                                                  </div>
                                                  <div class="tab-content" id="v-pills-tabContent">
                                                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <p align="justify">UD. Satu Tujuan is a stock website that accommodates goods in the form of grocery merchandise. Starting from kitchen materials, toiletries, even stationery. 
                                                            On this website you can find various features that make it easy for you to choose the availability of the stock you want before you visit our store directly. 
                                                            You will be given an extraordinary experience in using our website. Happy using and happy browsing !!!
                                                            <br> ~Regards, <br> Manager UD. Satu Tujuan
                                                        </p>
                                                     </div>
                                                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                        <p>If you in the trouble, you can contact our gmail at the bellow button !!!
                                                        <br><br><a type="button" class="btn btn-outline-secondary"  href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJvqKWjkmrclHMbKmvKnZHmLBSNscNhZFnwzZJkXQkfbBDjQRMbNGMJDmgGnHpDqddkHvCg"><i class="fa fa-envelope-o "></i> E-mail Here </a>
                                                        </p>
                                                     </div>
                                                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                        <p><i class="fa fa-phone"></i> +62 812-6361-6252
                                                            <br><i class="fa fa-envelope"></i> udsatu7an@gmail.com
                                                            <br><i class="fa fa-youtube-play"></i> https://www.youtube.com/channel/UD.SATU7AN
                                                        </p>
                                                     </div>
                                                  </div>
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
                        <p>Copyright ?? 2021 Designed by UD. SATU 7AN. All rights reserved.<br><br>
                           Distributed By: <a href="#">UD. SATU 7AN</a>
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
      <script src="js/custom.js"></script>
      <!-- Kalendar -->
      <script src="js/moment.js"></script>
      <script>
         document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
               initialView: 'dayGridMonth',
               events: [<?php 
                        $data = mysqli_query($koneksi, "SELECT * FROM kalendar_admin");
                        
                        while ($d = mysqli_fetch_array($data)) {     
                     ?>
                     {  title: '<?php echo $d['kegiatan']; ?>',
                        start: '<?php echo $d['mulai']; ?>',
                        end: '<?php echo $d['selesai']; ?>'    
                     },
                     <?php 
                        } 
                     ?> ],
                     
               selectOverlap: function (event) {
                  return event.rendering === 'background';
               }
            });

            calendar.render();
         });
      </script>
      <!-- Teks Animasi -->
      <script src="js/scriptAnimasi.js"></script>
   </body>
</html>