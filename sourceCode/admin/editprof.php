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
      <title>Edit Profile</title>
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
      <!-- Script ChartJS -->
      <script src="js/Chart.js"></script>
      <!-- Calendar -->
      <link href="css/fullcalendar.css" rel="stylesheet" />
      <script src="js/fullcalendar.js"></script>
      <!-- Teks Animasi -->
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/styleAnimasi.css">
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
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="dashboardadm.php"><img class="logo_icon img-responsive" style="width: auto;" src="images/logo/status.png" alt="#" /></a>
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
                        <a href="dashboardadm.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li><a href="manuser.php"><i class="fa fa-users blue2_color"></i> <span>Management User</span></a></li>
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
                           <a href="admin.html"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
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
                                       <a class="dropdown-item" href="profileadmin.php">My Profile</a>
                                       <a class="dropdown-item" href="settingsadmin.php">Settings</a>
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

                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2><a href="settingsadmin.php">Settings </a><small><i class="fa fa-angle-double-right"></i> Edit Profile</small></h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-lg-12">
                           <div class="white_shd full margin_bottom_30" style="background-image: url('images/layout_img/pattern_h.png');">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                              </div>
                                
                                <!-- Card Body -->
                            <?php
                            require_once'../includes/koneksi.php';
                            $id = $_POST['id'];
                            $query = "SELECT * FROM user WHERE id=$id";
                            $hasil = mysqli_query($koneksi, $query);
                            foreach ($hasil as $data){
                            ?>

                            <?php
                                if(isset($_POST['btnUbah'])) {
                                    $no = $_POST['id'];
                                    $user = $_POST['username'];
                                    $pass = $_POST['password'];
                                    $hashPass = password_hash($pass, PASSWORD_BCRYPT);
                                    $nama = $_POST['nama'];
                                    $email = $_POST['email'];
                                    
                                    if ($koneksi) {
                                        $sql = "UPDATE user SET username='$user', nama='$nama', email='$email', password='$hashPass' WHERE id=$no";
                                        mysqli_query($koneksi,$sql);
                                        echo "<br><p class='alert alert-primary text-center'><b>Account has been updated.</p>";
                                    } else {
                                        echo "<p class='alert alert-danger text-center'><b>Terjadi kesalahan:$error</b></p>";
                                    }
                                }
                            ?>
                            
                           <form method="POST" class="my-login-validation" novalidate="">
                              <input hidden type="number" name="id" value="<?php echo $data['id']; ?>">

                              <div class="form-group">
                                 <label for="name">Name</label>
                                 <input value="<?php echo $data['nama']; ?>" id="name" type="text" class="form-control" name="nama" required autofocus>
                                 <div class="invalid-feedback">
                                    What's your name?
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="name">Username</label>
                                 <input value="<?php echo $data['username']; ?>" id="name" type="text" class="form-control" name="username" required autofocus>
                                 <div class="invalid-feedback">
                                    What's your username?
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="password">Password</label>
                                 <input value="<?php echo $data['password']; ?>" id="password" type="password" class="form-control" name="password" required data-eye>
                                 <div class="invalid-feedback">
                                    Password is required
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="email">E-Mail Address</label>
                                 <input value="<?php echo $data['email']; ?>" id="email" type="email" class="form-control" name="email" required>
                                 <div class="invalid-feedback">
                                    Your email is invalid
                                 </div>
                              </div>

                              <div class="form-group m-0">
                                 <button name="btnUbah" type="submit" class="btn btn-primary btn-block">
                                    Save Changes
                                 </button>
                              </div>
      
                           </form>
                           <div>
                            <?php } ?>
						   
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