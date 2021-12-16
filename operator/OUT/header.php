<?php 
    date_default_timezone_set("Asia/Jakarta"); 
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
      <title><?php echo $TITLE; ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../../operator/images/logo/LOGO 1.9.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../../operator/css/bootstrap.min.css" />
      <!-- CSS only -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" >
      <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
      <!-- site css -->
      <link rel="stylesheet" href="../../operator/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../../operator/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../../operator/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../../operator/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../../operator/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../../operator/css/all.css" />
      <link rel="stylesheet" href="../../operator/css/custom.css" />
      <link rel="stylesheet" href="../../operator/css/btn.css" />
      <link href="../../operator/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="../../operator/js/semantic.min.css" />
      <!-- Script ChartJS -->
      <script src="../../operator/js/chart.js"></script>
      <!-- Calendar -->
      <link href="../../css/operator/fullcalendar.css" rel="stylesheet" />
      <script src="../../js/operator/fullcalendar.js"></script>
      <!-- Teks Animasi -->
      <link rel="stylesheet" href="../../operator/css/normalize.css">
      <link rel="stylesheet" href="../../operator/css/styleAnimasi.css">
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
                        <a href="../../operator/dashboardop.php"><img class="logo_icon img-responsive" style="width: auto;" src="../../operator/images/logo/status.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../../operator/images/logo/user.png" alt="#" /></div>
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
                     <li><a href="../../operator/dashboardop.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li>
                        <a href="#dataproduct" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cubes purple_color"></i> <span>Data Product</span></a>
                        <ul class="collapse list-unstyled" id="dataproduct">
                           <li><a href="categoryproduct.php">> <span>Category Product</span></a></li>
                           <li><a href="companyproduct.php">> <span>Company Product</span></a></li>
                        </ul>
                     </li>
                     <li><a href="../../operator/mdpop.php"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                     <li><a href="../../operator/in/in.php"><i class="fa fa-shopping-cart blue1_color"></i> <span>Incoming Product</span></a></li>
                     <li><a href="index.php"><i class="fa fa-truck red_color"></i> <span>Outgoing Product</span></a></li>
                     <li>
                        <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-print green_color"></i> <span>Report</span></a>
                        <ul class="collapse list-unstyled" id="report">
                           <li><a href="../../operator/reportmdp.php">> <span>Master Data Product</span></a></li>
                           <li><a href="../../operator/reportin.php">> <span>Incoming Product</span></a></li>
                           <li><a href="../../reportout.php">> <span>Outgoing Product</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
        <?php
            $SELECT_TABLE = "SELECT * FROM `notification`";
            $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);

            $NUM_ROWS = mysqli_num_rows($SELECT_TABLE_QUERY);
        ?>
        <!-- HEADER -->
        <div id="content">
        <div class="topbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="full">
                    <button type="button" id="sidebarCollapse" class="sidebar_toggle" style="height: 62px;"><i class="fa fa-bars"></i></button>
                    <div class="logo_section">
                        <a href="../../operator/dashboardop.php"><img class="img-responsive" src="../../operator/images/logo/UD. SATU 7AN.png" alt="#" /></a>
                    </div>
                    <div class="right_topbar">
                        <div class="icon_info">
                            <ul>
                                <li class="nav-item dropdown">
                                    <a class="" href="#" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell"></i>
                                        <?php
                                            if($SELECT_TABLE_QUERY -> num_rows > 0)
                                            {
                                                echo "<span class='badge'>$NUM_ROWS</span>";
                                            }
                                        ?>
                                    </a>
                                    <div class="dropdown-menu" style="width: 350px; left: -275px; top: 35px; background-clip: none; border: none; background-color: #214162" aria-labelledby="dropdownNotification">
                                        <?php
                                            
                                            if($SELECT_TABLE_QUERY -> num_rows > 0)
                                            {
                                                foreach($SELECT_TABLE_QUERY as $NOTIFICATION)
                                                {
                                                    if($NOTIFICATION['type'] == "add")
                                                    {
                                                        echo "<div class='row g-0 py-2 px-0 mx-0' id='notification' style='cursor: pointer' onclick=\"location.href='add-outgoing.php?session_id=$NOTIFICATION[link]'\">";
                                                        echo "  <div class='col-3 d-inline-block text-center text-info align-self-center align-middle px-1'><i class='far fa-plus-square fa-lg fa-2x align-middle'></i></div>";
                                                        echo "      <div class='col-9 d-inline-block text-left align-self-center align-middle px-1' style='line-height: 13px'>";
                                                        echo "          <div class='card-title text-info font-weight-bold'><span>ADD OUTGOING</span></div>";
                                                        echo "          <div class='card-body text-info p-0'><span>Seems like you have unfinished work in this session.</span></div>";
                                                        echo "          <div class='small text-right text-info'><span>$NOTIFICATION[time]</span></div>";
                                                        echo "      </div>";
                                                        echo "</div>";
                                                        echo "<div class='dropdown-divider'></div>";
                                                    }
                                                    else
                                                    {
                                                        echo "<div class='row g-0 py-2 px-0 mx-0' id='notification' style='cursor: pointer' onclick=\"location.href='edit-outgoing.php?id=$NOTIFICATION[user_id]&session_id=$NOTIFICATION[link]'\">";
                                                        echo "  <div class='col-3 d-inline-block text-center text-info align-self-center align-middle px-1'><i class='fad fa-edit fa-lg fa-2x align-middle'></i></div>";
                                                        echo "      <div class='col-9 d-inline-block text-left align-self-center align-middle px-1' style='line-height: 13px'>";
                                                        echo "          <div class='card-title text-info font-weight-bold'><span>EDIT OUTGOING</span></div>";
                                                        echo "          <div class='card-body p-0 text-info'><span>Seems like you have unfinished work in this session.</span></div>";
                                                        echo "          <div class='small text-right text-info'><span>$NOTIFICATION[time]</span></div>";
                                                        echo "      </div>";
                                                        echo "</div>";
                                                        echo "<div class='dropdown-divider'></div>"; 
                                                    }                                                   
                                                }
                                            }
                                            else
                                            {
                                                echo "<div class='row g-0' id='notification' style='cursor: pointer'>";
                                                echo "  <div class='col-3 d-inline-block text-center text-info align-self-center align-middle px-1'><i class='far fa-empty-set fa-lg fa-2x align-middle'></i></div>";
                                                echo "      <div class='col-9 d-inline-block text-left align-self-center align-middle px-1' style='line-height: 13px'>";
                                                echo "          <div class='card-body p-0 text-info align-self-center'><span>You have no new notifications.</span></div>";
                                                echo "      </div>";
                                                echo "</div>";
                                            }                                   
                                        ?> 
                                    </div>   
                                </li>
                                <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i><span class="badge">3</span></a></li>
                            </ul>
                            <ul class="user_profile_dd">
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../../operator/images/logo/user.png" alt="#" /><span class="name_user"><?=$_SESSION['nama']?></span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../../operator/profileop.php">My Profile</a>
                                        <a class="dropdown-item" href="../../operator/settingsop.php">Settings</a>
                                        <a class="dropdown-item" href="../../pages/logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END OF HEADER -->