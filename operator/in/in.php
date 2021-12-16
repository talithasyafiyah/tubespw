<?php 
session_start();
    if(empty($_SESSION['level'])) {
        echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
    }
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
      <title>Incoming Product</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../../images/logo/LOGO 1.9.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <!-- CSS only -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" >
      <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
      <!-- site css -->
      <link rel="stylesheet" href="../style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../css/custom.css" />
      <link rel="stylesheet" href="../css/btn.css" />
      <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="../js/semantic.min.css" />
      <!-- Script ChartJS -->
      <script src="../js/chart.js"></script>
      <!-- Calendar -->
      <link href="../css/fullcalendar.css" rel="stylesheet" />
      <script src="../js/fullcalendar.js"></script>
      <!-- Teks Animasi -->
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/styleAnimasi.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
    <body class="inner_page contact_page">
        <div class="full_container">
        <div class="inner_container">
        <!-- SIDEBAR  -->
        <nav id="sidebar">
            <div class="sidebar_blog_1">
                <div class="sidebar-header">
                    <div class="logo_section">
                        <a href="../dashboardop.php"><img class="logo_icon img-responsive" style="width: auto;" src="../../operator/images/logo/status.png" alt="#" /></a>
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
                     <li><a href="../dashboardop.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li>
                        <a href="#dataproduct" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cubes purple_color"></i> <span>Data Product</span></a>
                        <ul class="collapse list-unstyled" id="dataproduct">
                           <li><a href="../categoryproduct.php">> <span>Category Product</span></a></li>
                           <li><a href="../companyproduct.php">> <span>Company Product</span></a></li>
                        </ul>
                     </li>
                     <li><a href="../mdpop.php"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                     <li><a href="in.php"><i class="fa fa-shopping-cart blue1_color"></i> <span>Incoming Product</span></a></li>
                     <li><a href="../out/index.php"><i class="fa fa-truck red_color"></i> <span>Outgoing Product</span></a></li>
                     <li>
                        <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-print green_color"></i> <span>Report</span></a>
                        <ul class="collapse list-unstyled" id="report">
                           <li><a href="../reportmdp.php">> <span>Master Data Product</span></a></li>
                           <li><a href="../reportin.php">> <span>Incoming Product</span></a></li>
                           <li><a href="../reportout.php">> <span>Outgoing Product</span></a></li>
                        </ul>
                     </li>
                  </ul>
            </div>
        </nav>
        <!-- END OF SIDEBAR -->
         <!-- HEADER -->
         <div id="content">
         <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle" style="height:69.8px"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                           <a href="../dashboardop.php"><img class="img-responsive" style="width: auto;" src="../../operator/images/logo/UD. SATU 7AN.png" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                       <a class="btn dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../../operator/images/logo/user.png" alt="#" /><span class="name_user"><?=$_SESSION['nama']?></span></a>
                                       <div class="dropdown-menu">
                                          <a class="dropdown-item" href="../profileop.php">My Profile</a>
                                          <a class="dropdown-item" href="../settingsop.php">Settings</a>
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
 <!-- dashboard inner -->
 <div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Data <small><i class="fa fa-angle-double-right"></i> Barang Masuk <i class="fa fa-angle-double-right"></i>
                  <a type="button" class="btn btn-outline-warning btn-sm"  href="incoming.php"><i class="fa fa-plus-circle orange_color"></i> Add Barang </a></small>
            </div>
         </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-lg-12">
             <div class="white_shd full margin_bottom_30" style="background-image: url('../images/layout_img/pattern_h.png');">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Incomming Product</h2>
                   </div>
                </div>
                <div class="table_section padding_infor_info">
                   <div class="table">

                      <table class="table" id="dataTable" style="background-image: url('../images/layout_img/pattern_h.png');"> 
                         <thead>
                            <tr>

                               <th class="text-center align-left font-weight-bold">id masuk</th>
                               <th class="text-center align-left font-weight-bold">id barang</th>
                               <th class="text-center align-left font-weight-bold">tanggal</th>
                               <th class="text-center align-left font-weight-bold">nama barang</th>
                               <th class="text-center align-left font-weight-bold">supplier</th>
                               <th class="text-center align-left font-weight-bold">quantity</th>
                               <th class="text-center align-left font-weight-bold" data-orderable="false">Detail</th>
                               <th class="text-center align-left font-weight-bold" data-orderable="false">Hapus</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                              require_once '../../includes/koneksi.php';

                              //maksud kode dibawah 2 baris :
                              $sql = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
                              while ($data = mysqli_fetch_array($sql)) {
                              ?>
                               <tr>

                                  <td class='text-center align-left'><?php echo $data['id_masuk']; ?></td>
                                  <td class='text-center align-left'><?php echo $data['id_barang']; ?></td>
                                  <td class='text-center align-left'><?php echo $data['tanggal']; ?></td>
                                  <td class='text-center align-left'><?php echo $data['nama_barang']; ?></td>
                                  <td class='text-center align-left'><?php echo $data['supplier']; ?></td>
                                  <td class='text-center align-left'><?php echo $data['quantity']; ?></td>
                                  <td class='text-center align-center'>
                                     <a href="receiving-details.php?id=<?php echo $data['id_masuk']; ?>" class='btn btn-outline-info'>
                                        <i class='fa fa-folder-open fa-lg'></i>
                                     </a>
                                  </td>
                                  <td class='text-center align-center'>

                                     <a href="hapus.php?id=<?php echo $data['id_masuk']; ?>" class='btn btn-outline-danger'>
                                        <i class='fa fa-trash fa-lg'></i>
                                     </a>
                                  </td>
                               </tr>
                            <?php
                              }
                              ?>
                      </table>

                      </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
          <!-- end row -->
       </div>
       <div class="container-fluid">
                        <div class="footer">
                           <p>Copyright © 2021 Designed by UD. SATU 7AN. All rights reserved.<br><br>
                              Distributed By: <a href="#">UD. SATU 7AN</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../../operator/js/jquery.min.js"></script>
      <script src="../../operator/js/popper.min.js"></script>
      <script src="../../operator/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../../operator/js/animate.js"></script>
      <!-- select country -->
      <script src="../../operator/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../../operator/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../../operator/js/Chart.min.js"></script>
      <script src="../../operator/js/Chart.bundle.min.js"></script>
      <script src="../../operator/js/utils.js"></script>
      <script src="../../operator/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../../operator/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../../operator/js/custom.js"></script>
      <!-- calendar file js -->     
      <script src="../../operator/js/semantic.min.js"></script>
      <!-- datatables file js -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
      <script>
         $(document).ready (function(){
            $('#dataTable').DataTable();
         });
      </script>
      <!-- select option js -->
      <script src="../../operator/js/select2.min.js"></script>   
     
      <!-- ckeditor -->
      <script src="../../../tubes-1/ckeditor/ckeditor.js"></script>
      <script>
         // SORTING SELECT OPTION
         function sortSelectOptions(selector, skip_first) 
         {
            var options = (skip_first) ? $(selector + ' option:not(:first)') : $(selector + ' option');
            var arr = options.map(function(_, o) 
            { 
               return { t: $(o).text(), v: o.value, s: $(o).prop('selected') }; 
            }).get();
         
            arr.sort(function(o1, o2) 
            {
               var t1 = o1.t.toLowerCase(), t2 = o2.t.toLowerCase();
               return t1 > t2 ? 1 : t1 < t2 ? -1 : 0;
            });

            options.each(function(i, o) 
            {
                  o.value = arr[i].v;
                  $(o).text(arr[i].t);
                  if (arr[i].s) 
                  {
                     $(o).attr('selected', 'selected').prop('selected', true);
                  } 
                  else 
                  {
                     $(o).removeAttr('selected');
                     $(o).prop('selected', false);
                  }
            }); 
         }

         // MAKE SELECT WITH SEARCH BAR
         $(document).ready(function()
         {
            $('#Select_Product').select2();
            sortSelectOptions('#Select_Product', true);
         });
         
         // CLOSE ALERT AFTER CERTAIN SECONDS
         $("#alert").delay(3000).fadeOut(3000, function()
         {
            $("#alert").addClass("d-none");
         });
      </script>
   </body>
</html>