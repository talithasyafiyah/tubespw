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
      <title>Dashboard Operator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../images/fevicon.png" type="image/png" />
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
                        <a href="operator.html"><img class="logo_icon img-responsive" style="width: auto;" src="../../operator/images/logo/status.png" alt="#" /></a>
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
                     <li><a href="dashboardop.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
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
                           <a href="operator.html"><img class="img-responsive" style="width: auto;" src="../../operator/images/logo/UD. SATU 7AN.png" alt="#" /></a>
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
<!--end of konten-->
<!--main page-->

         <form method="POST" action="update.php"  onsubmit="return true">
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <div class="row">
                              <div class="col-xs-3 col-sm-4 col-md-6 col-lg-7 align-self-center">
                                 <h2>
                                    <i class="fa fa-plus-square fa-md orange_color"></i> 
                                    &nbsp Edit receiving &nbsp;&nbsp
                                    <small>
                                    <i class="fa fa-angle-double-right fa-xs"></i>
                                    &nbsp;&nbsp Insert Transaction 
                                    </small>
                                 </h2>
                              </div>
                              <div class="col-xs-3 col-sm-4 col-md-6 col-lg-5 align-self-center text-right">  
                                 <i class="fad fa-calendar-week fa-md"></i>   
                                 <span class="font-weight-bold">&nbsp Tanggal : 
                                    <span class="text-primary">
                                       <?php
                                          echo date("D, j F Y, G:i");
                                       ?>
                                    </span>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="row column1">
            <div class="col-lg-12">
               <div class="white_shd full margin_bottom_30 px-2" style="background-image: url('../images/layout_img/pattern_h.png');">
                     <div class="row">
                        <div class="col-lg-5" style="width: 420.09px">
                           <table class="table table-bordered my-2" id="">
                          
                                 <thead class="thead">
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold" colspan="2">
                                          <i class="fa fa-inbox"></i>
                                          &nbsp Edit quantity
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="col-lg-12 col-md-8">
                                       <input type="text" name="nb" value="<?php echo $data['nama_barang'];?>">
                                       </td>
                                       <td>
                                          <input type="number" name="quantity" value="<?php echo $data['quantity'];?>" placeholder="Quantity" style="height: 28px; width: 68px">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php 
                                             if (isset($STATUS['error']) || isset($STATUS['success'])) echo
                                             '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                   <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                   </symbol>
                                                   <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                   </symbol>
                                             </svg>'; 
                                          ?>
                                          <div class="row justify-content-center">
                                             <div class="alert col-lg-11 col-md-8 col-sm-6 col-xs-4 
                                                <?php 
                                                   if (isset($STATUS['error']))
                                                   {
                                                      echo "alert-danger";
                                                   } 
                                                   if (isset($STATUS['success']))
                                                   {
                                                      echo "alert-success";
                                                   }
                                                ?>
                                                justify-content-center d-flex align-items-center mb-0 py-1 px-0" role="alert" style="height: 28px" id="alert">
                                                <svg class="bi flex-shrink-0 " width="30" height="15" role="img" aria-label="Danger:">
                                                   <?php
                                                      if (isset($STATUS['error']))
                                                      {
                                                         echo '<use xlink:href="#exclamation-triangle-fill"/>';
                                                      }
                                                      if (isset($STATUS['success']))
                                                      {
                                                         echo '<use xlink:href="#check-circle-fill"/>';
                                                      }
                                                   ?>
                                                </svg>
                                                <div class="text-center align-middle">
                                                   <?php 
                                                      if(isset($STATUS['error']))
                                                      {
                                                         echo $STATUS['error'];
                                                      }
                                                      if(isset($STATUS['success']))
                                                      {
                                                         echo $STATUS['success'];
                                                      }
                                                   ?>
                                                </div>
                                             </div>
                                          </div>
                                       </td>
                                      
                                    </tr>
                                 </tbody>
                           
                           </table>
                        </div>
                        <div class="col-lg-7">
                           <table class="table table-bordered my-2" id="" style="table-layout: fixed">
                            
                                 <thead>
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold" colspan="2">
                                          <i class="fa fa-shopping-cart fa-md green_color"></i>
                                          &nbsp Edit supplier
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="input-group align-items-center " >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">tanggal masuk</label>
                                             <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" class="col-lg-10 col-sm-6 col-md-6 form-control mr-2" style="height: 28px;">
                                          </div>
                                       </td>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2 ">id masuk</label>
                                             <input type="text" name="id_masuk" id="id_masuk"  value="<?php echo $data['id_masuk'];?>" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px" >
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">supplier</label>
                                             <input type="text" name="supplier" id="supplier" value="<?php echo $data['supplier'];?>" class="col-lg-12 col-sm-7 col-md-6 form-control mr-2" style="height: 28px">
                                          </div>
                                       </td>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">id barang</label>
                                             <input type="text" name="id_barang" id="id_barang" value="<?php echo $data['id_barang'];?>" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px" >
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                         
                           </table>
                                 
               
                                 <button class="btn btn-primary mb-2 mr-2 px-2 py-2 rounded w-auto" name="ubah" style="width: 66.74px">
                                    <span class="fa fa-save fa-md"></span> 
                                    <span >&nbsp Save</span>
                                 </button>
                                 <a href="in.php" class="btn btn-secondary mb-2 px-2 py-2 rounded w-auto" style="width: 66.74px" >
                                    <span class="fa fa-close"></span>
                                    <span >&nbsp cancel</span>
                                 </a>
                      
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </form>
            <?php
               }
               ?>
            <!-- END OF CONTENT -->
            <!-- FOOTER -->
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
      <script type="text/javascript">   
               <?php echo $jsArraycopy; ?> 
                  function changeValueee(itemm){ 
		            document.getElementById('id_barang').value = prdNamecopy[itemm].id_barang;
                  document.getElementById('produk').value = prdNamecopy[itemm].produk;
                  }; 
            </script>
   </body>
</html>

            
            