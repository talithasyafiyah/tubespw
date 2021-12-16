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
      <title>Insert Product</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/logo/LOGO 1.9.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- CSS only -->
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
      <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
      <!-- Bootstrap -->
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Custom stlylesheet -->
      <link type="text/css" rel="stylesheet" href="css/insert.css" />
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
                        <a href="dashboardop.php"><img class="logo_icon img-responsive" style="width: auto;" src="images/logo/status.png" alt="#" /></a>
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
                     <li><a href="dashboardop.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li>
                        <a href="#dataproduct" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cubes purple_color"></i> <span>Data Product</span></a>
                        <ul class="collapse list-unstyled" id="dataproduct">
                           <li><a href="categoryproduct.php">> <span>Category Product</span></a></li>
                           <li><a href="companyproduct.php">> <span>Company Product</span></a></li>
                        </ul>
                     </li>
                     <li><a href="mdpop.php"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                     <li><a href="in/in.php"><i class="fa fa-shopping-cart blue1_color"></i> <span>Incoming Product</span></a></li>
                     <li><a href="out.php"><i class="fa fa-truck red_color"></i> <span>Outgoing Product</span></a></li>
                     <li>
                       <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-print green_color"></i> <span>Report</span></a>
                       <ul class="collapse list-unstyled" id="report">
                          <li><a href="reportmdp.php">> <span>Master Data Product</span></a></li>
                          <li><a href="reportin.php">> <span>Incoming Product</span></a></li>
                          <li><a href="reportout.php">> <span>Outgoing Product</span></a></li>
                       </ul>
                    </li>
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
                           <a href="dashboardop.php"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
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
                                       <a class="dropdown-item" href="profileop.php">My Profile</a>
                                       <a class="dropdown-item" href="settingsop.php">Settings</a>
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
                             <h2>Data <small><i class="fa fa-angle-double-right"></i> Barang <i class="fa fa-angle-double-right"></i>
                             Insert <i class="fa fa-angle-double-right"></i> <a type="button" class="btn btn-outline-danger btn-sm"  href="mdpop.php"> <i class="fa fa-backward red_color"></i> Back </a></small>
                          </div>
                       </div>
                    </div>
                    <!-- row -->
                    <div class="row column1">
                       <div class="col-lg-12">
                          <div class="white_shd full margin_bottom_30" style="background-image: url('images/layout_img/pattern_h.png');">
                             <div class="full graph_head">
                                <div class="heading1 margin_0">
                                   <h2>Master Data Product</h2>
                                </div>
                             </div>
                             <div class="contain">
                                <div class="section-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="booking-form">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <span class="form-label">ID Barang</span>
                                                        <input class="form-control" name="id" type="number" placeholder="Masukkann ID Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Description</span>
                                                        <input class="form-control" name="desc" type="text" placeholder="Masukkan Deskripsi Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Company</span>
                                                        <input class="form-control" name="company" type="text" placeholder="Masukkan Perusahaan Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Stock</span>
                                                        <input class="form-control" name="stock" type="number" placeholder="Masukkan Jumlah Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Price</span>
                                                        <input class="form-control" name="price" type="text" placeholder="Masukkan Harga Barang (Rp xx.xxx)" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Images</span>
                                                        <div class="input-group ">
                                                            <input type="file" class="form-control" style="height:auto" id="inputGroupFile01" name="namafile"> 
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-btn">
                                                                <button type="submit" class="btn btn-outline-light btn-lg orange_color" name="buttonins"> <i class="fa fa-check orange_color"></i> SAVE </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-btn">
                                                                <a type="button" class="btn btn-outline-danger btn-lg" name="buttoncnc"  href="mdpop.php"><i class="fa fa-times" style="color: white;"></i> CANCEL </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                    require_once'../includes/koneksi.php';
                                                    
                                                    
                                                    if(isset($_POST['buttonins'])){
                                                        $id_barang = $_POST['id'];
                                                        $description = $_POST['desc'];
                                                        $company = $_POST['company'];
                                                        $stock = $_POST['stock'];
                                                        $price = $_POST['price'];
                                                        $direktori = "../operator/gambar/";
                                                        $file_name=$_FILES['namafile']['name'];
                                                        move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$file_name);
                                                        $sql = "INSERT INTO data_produk (id_barang, produk, perusahaan, stok, harga, gambar) VALUES ('$id_barang','$description','$company','$stock','$price','$file_name')";
																			
			                                            if($koneksi->query($sql)===TRUE){
                                                        echo "<script>setTimeout(\"location.href = 'mdpop.php';\",1500);</script>";
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
   </body>
</html> 