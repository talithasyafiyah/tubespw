<?php
session_start();
    if(empty($_SESSION['level'])) {
        echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
    }
?>

<?php 
   include "../includes/koneksi.php";
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
      <link rel="icon" href="images/fevicon.png" type="image/png" />
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
   <body class="inner_page contact_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="operator.html"><img class="logo_icon img-responsive" style="width: auto;" src="images/logo/status.png" alt="#" /></a>
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
                     <li><a href="./out/index.php"><i class="fa fa-truck red_color"></i> <span>Outgoing Product</span></a></li>
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
                           <a href="operator.php"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
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
                             <h2>Data <small><i class="fa fa-angle-double-right"></i> Barang <i class="fa fa-angle-double-right"></i>
                             <a type="button" class="btn btn-outline-warning btn-sm"  href="insertmdp.php"><i class="fa fa-plus-circle orange_color"></i> Add Barang </a></small>
                          </div>
                       </div>
                    </div>
                    <!-- row -->
                    <div class="row column1">
                       <div class="col-lg-12" >
                          <div class="white_shd full margin_bottom_30" style="background-image: url('images/layout_img/pattern_h.png');">
                             <div class="full graph_head">
                                <div class="heading1 margin_0">
                                   <h2>Master Data Product</h2>
                                </div>
                             </div>
                                <div class="table_section padding_infor_info table table-striped" >
                                   <div class="table">
                                   
                                   <table class="table" id="dataTable" style="background-image: url('images/layout_img/pattern_h.png');">
                                      <thead >
                                         <tr>
                                            <th class="text-left align-left font-weight-bold">No.</th>
                                            <th class="text-left align-left font-weight-bold">ID Barang</th>
                                            <th class="text-left align-left font-weight-bold">Description</th>
                                            <th class="text-left align-left font-weight-bold">Company</th>
                                            <th class="text-left align-left font-weight-bold">Stock</th>
                                            <th class="text-left align-left font-weight-bold">Price</th>
                                            <th class="text-left align-left font-weight-bold" data-orderable="false">Action</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                      <?php

                                         require_once'../includes/koneksi.php';

                                         $SQL = "SELECT * FROM data_produk";
                                         $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                         $no = 1;

                                         while ($data = mysqli_fetch_array($SQL_QUERY)){
                                             $id_barang=$data['id_barang'];
                                             $product=$data['produk'];
                                             $perusahaan=$data['perusahaan'];
                                             $stok=$data['stok'];
                                             $harga=$data['harga'];
                                             $gambar=$data['gambar'];
                                             
                                      ?>
                                      <tr>
                                        <td class='text-left align-left'><?=$no++;?></td> 
                                        <td class='text-left align-left'><?=$id_barang;?></td> 
                                        <td class='text-left align-left'><?=$product;?></td> 
                                        <td class='text-left align-left'><?=$perusahaan;?></td> 
                                        <td class='text-left align-left'><?=$stok;?></td> 
                                        <td class='text-left align-left'><?=$harga;?></td>
                                        <td class='text-center align-center'>
                                            <button type='button' name='view' class='btn btn-outline-info btn-sm' data-toggle='modal' data-target='#view<?=$id_barang;?>'>
                                            <i class='fa fa-folder-open-o  black_color'></i> 
                                            </button>
                                            <button type='button' name='edit' class='btn btn-outline-success btn-sm' data-toggle='modal' data-target='#update<?=$id_barang;?>'>
                                            <i class='fa fa-pencil  black_color'></i> 
                                            </button>
                                            <input type ="hidden" name='idbaranghapus' value="<?=$id_barang;?>">
                                            <button type='button' name='delete' class='btn btn-outline-danger btn-sm' data-toggle='modal' data-target='#delete<?=$id_barang;?>'>
                                            <i class='fa fa-trash-o  black_color'></i> 
                                            </button>
                                        </td>
                                      </tr>
                                      <!-- Preview Modal -->
                                      <div class="modal fade" id="view<?=$id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content"  style="background-image: url('images/layout_img/pattern.png');">
                                                <div class="modal-header">
                                                   <h5 class="modal-title">Preview Product</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                      </button>
                                                </div>
                                                   <div class="modal-body">
                                                   <form method="POST">
                                                   <div class="form-group">
                                                   <label for="Gambar" class="col-form-label">Gambar :</label>
                                                   <br>
                                                   <img src="gambar/<?php echo $data['gambar'];?>" width="200px">
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="id_barang" class="col-form-label">ID Barang :</label>
                                                   <br>
                                                   <?=$id_barang;?>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="description" class="col-form-label">Description :</label>
                                                   <br>
                                                   <?=$product;?>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="company" class="col-form-label">Company :</label>
                                                   <br>
                                                   <?=$perusahaan;?>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="stock" class="col-form-label">Stock :</label>
                                                   <br>
                                                   <?=$stok;?>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="price" class="col-form-label">Price :</label>
                                                   <br>
                                                   <?=$harga;?>
                                                   </div>
                                                   <div class="modal-footer"> 
                                                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                   </div>
                                                   </form>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                      <!-- Update Modal -->
                                      <div class="modal fade" id="update<?=$id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content"  style="background-image: url('images/layout_img/pattern.png');">
                                                <div class="modal-header">
                                                   <h5 class="modal-title">Update Product</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                      </button>
                                                </div>
                                                   <div class="modal-body">
                                                   <form method="POST">
                                                   <div class="form-group">
                                                   <label for="id_barang" class="col-form-label">ID Barang :</label>
                                                   <input type="text" name="id_barang" value="<?=$id_barang;?>" class="form-control" required>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="description" class="col-form-label">Description :</label>
                                                   <input type="text" name="description" value="<?=$product;?>" class="form-control" required>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="company" class="col-form-label">Company :</label>
                                                   <input type="text" name="company" value="<?=$perusahaan;?>" class="form-control" required>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="stock" class="col-form-label">Stock :</label>
                                                   <input type="text" name="stock" value="<?=$stok;?>" class="form-control" required>
                                                   </div>
                                                   <div class="form-group">
                                                   <label for="price" class="col-form-label">Price :</label>
                                                   <input type="text" name="price" value="<?=$harga;?>" class="form-control" required>
                                                   </div>
                                                   <div class="modal-footer"> 
                                                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                      <input hidden type="text" name="id_barang" value="<?=$id_barang;?>">
                                                      <button type="submit" name="btnupdate" class="btn btn-primary">Update Product</button>
                                                   </div>
                                                   </form>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                      <!-- Delete Modal -->
                                      <div class="modal fade" id="delete<?=$id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content"  style="background-image: url('images/layout_img/pattern.png');">
                                                <div class="modal-header">
                                                   <h5 class="modal-title">Hapus Barang ?</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                      </button>
                                                </div>
                                                   <form method="POST">
                                                   <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus <?=$product;?>?
                                                   </div>
                                                   <div class="modal-footer"> 
                                                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                      <input hidden type="text" name="idbarang" value="<?=$id_barang;?>">
                                                      <button type="submit" name="btnhapus" class="btn btn-danger" action>Delete Product</button>
                                                   </div>
                                                   </form>
                                             </div>
                                          </div>
                                       </div>
                                       
                                      <?php
                                         }
                                         ?>
                                       <?php
                                        include'../includes/koneksi.php';
                                        if (isset($_POST['btnupdate'])){
                                            $id = $_POST['id_barang'];
                                            $description = $_POST['description'];
                                            $company = $_POST['company'];
                                            $stock = $_POST['stock'];
                                            $price = $_POST['price'];
                                            
                                            if ($koneksi){
                                             $update = "UPDATE data_produk SET produk='$description', perusahaan='$company', stok='$stock', harga='$price' WHERE id_barang=$id";
                                             mysqli_query($koneksi,$update);
                                             echo "<script>setTimeout(\"location.href = 'mdpop.php';\",1500);</script>";
                                    
                                            } else {
                                                echo 'Gagal';
                                                header('mdpop.php');
                                            }
                                        }

                                        if (isset($_POST['btnhapus'])){
                                            
                                          $idb = $_POST['idbarang'];
                                          $hapus = mysqli_query($koneksi, "DELETE FROM data_produk WHERE id_barang='$idb'");
                                          if ($hapus){
                                             echo "<script>setTimeout(\"location.href = 'mdpop.php';\",1500);</script>";
                                  
                                          } elseif($koneksi->connect_error){
                                              echo 'Gagal';
                                              header('mdpop.php');
                                          }
                                      }
                                    ?>
                                      </tbody>
                                   </table>
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
      <!-- datatables file js -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
      <script>
         $(document).ready(function() 
         {
            $('#dataTable').DataTable();
         });
      </script>
      <!-- Modal -->
            <script>
         $('#Modal').on('shown.bs.modal', function () {
         $('#myInput').trigger('focus')
         })
      </script>
   </body>
</html>