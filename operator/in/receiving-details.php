<?php
session_start();
    if(empty($_SESSION['level'])) {
        echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
    }
require_once '../../includes/koneksi.php';
$id   = $_GET['id'];	
$sql = mysqli_query($koneksi,"select* from barang_masuk where id_masuk='$id'  ");
while($data = mysqli_fetch_array($sql)){
?>
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
      <title>Receiving Details</title>
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
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle" style="height: 62px;"><i class="fa fa-bars"></i></button>
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
                                       <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../../operator/images/logo/user.png" alt="#" /><span class="name_user"><?=$_SESSION['nama']?></span></a>
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
   <!-- END OF HEADER -->
            

      <!-- CONTENT -->
      <div class="midde_cont">
               <div class="container-fluid">
               <div class="row column_title">
                  <div class="col-md-12">
                     <div class="page_title">
                        <div class="row">
                           <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5 align-self-center">
                              <h2>
                                 <i class="fad fa-info-square fa-lg"></i> 
                                 &nbsp Receiving Details
                              </h2>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 pr-0 align-self-center text-center">
                              <a href="print-report.php?id=<?=$_GET['id']; ?>" class="btn btn-outline-primary py-2 px-2 rounded">
                                 <i class="fa fa-print fa-lg"></i> 
                                 <span>&nbsp Print</span>
                              </a>
                              <i class="far fa-grip-lines-vertical fa-lg"></i> 
                              <a href="edit-incoming.php?id=<?php echo $data['id_masuk']; ?>" class="btn btn-outline-info py-2 px-2 rounded">
                                 <i class="fa fa-edit fa-lg"></i> 
                                 <span>&nbsp Edit</span>
                              </a>
                           </div>
                           <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 pr-0 align-self-center pl-5">     
                              <span class="font-weight-bold">
                                 No. Referensi : 
                                 <span class="text-danger">
                                 <?php echo $data['id_barang'];?>
                                 </span>
                              </span>
                              <br>
                              <span class="font-weight-bold">
                                 Tanggal : 
                                 <span class="text-success">
                                 <?php echo $data['tanggal'];?>
                                 </span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row column1">
                  <div class="col-lg-12">
                     <div class="white_shd full margin_bottom_30" style="background-image: url('../images/layout_img/pattern_h.png');">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>
                                    Supplier : 
                                    <span>
                                    <?php echo $data['supplier'];?>
                                    </span>
                                 </h2>
                              </div>
                           </div>
                           <div class="table_section padding_infor_info">
                              <div class="table">
                                 <table class="table table-striped table-bordered" id="detailsTable">
                                    <thead class="thead-dark">
                                       <tr>
                                          <th class="text-left align-middle font-weight-bold">id barang</th>
                                          <th class="text-left align-middle font-weight-bold">id masuk</th>
                                          <th class="text-left align-middle font-weight-bold">Nama Barang</th>
                                          <th class="text-left align-middle font-weight-bold">Quantity</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <!--makna kode-->
                                       <?php
                                          require_once '../../includes/koneksi.php';
                                          
                                          $SQL = "SELECT * FROM barang_masuk WHERE id_masuk = '$_GET[id]'";
                                          $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                          
                                          if ($SQL_QUERY -> num_rows > 0)
                                          {
                                             while($ROW = $SQL_QUERY -> fetch_assoc()) // HERE $ROW IS ARRAY
                                             { 
                                                
                                                $ID_BARANG = explode(",", $ROW['id_masuk']); // HERE $ROW['product_id'] IS STRING
                                                $INDEX_ID_BARANG = 0;
                                                $NAMA_BARANG = explode(",", $ROW['nama_barang']);                                                        
                                                $INDEX_NAMA_BARANG = 0;
                                                $QUANTITY = explode(",", $ROW['quantity']);   
                                                $INDEX_QUANTITY = 0;                                  
                                                foreach(explode(",", $ROW['id_barang']) as $RESULT)
                                                {                                                     
                                                   echo 
                                                   "<tr>
                                                      <td class='text-left align-middle'>$RESULT.</td>";
                                                   echo 
                                                   "  <td class='text-left align-middle'>$ID_BARANG[$INDEX_ID_BARANG]</td>";
                                                   
                                                   echo 
                                                   "  <td class='text-left align-middle'>$NAMA_BARANG[$INDEX_NAMA_BARANG]</td>";
                                                   echo 
                                                   "  <td class='text-left align-middle'>$QUANTITY[$INDEX_QUANTITY]</td>
                                                   </tr>";
                                                   $INDEX_ID_BARANG++;
                                                   $INDEX_NAMA_BARANG++;
                                                   $INDEX_QUANTITY++;
                                                }  
                                             }
                                          }
                                          
                                          ?>
                                    </tbody>
                                 </table>
                              </div>
                              <hr class="mt-5 mb-0">
                              <div class="text-right align-middle mt-2 h5">
                                 <span class="font-weight-bold">Total Jenis Barang : 
                                 <span class="text-success" id="val">
                                    <!--makna kode-->
                                 <?php 
                                       $TOTAL_ITEMS = array_sum($QUANTITY); 
                                       
                                       if($TOTAL_ITEMS > 1)
                                       {
                                          print_r($TOTAL_ITEMS." Items");
                                       }
                                       else
                                       {
                                          print_r($TOTAL_ITEMS." Item");
                                       }
                                       
                                    ?>
                                 </span>
                                 </span>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
               <!-- END OF CONTENT -->

                     <!-- FOOTER -->
                        <?php } ?>
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