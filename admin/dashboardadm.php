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
      <title>Dashboard Admin</title>
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
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="dashboardadm.php"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
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
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>

                     <!-- Teks Animasi -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="content">
                                       <div class="container">
                                          <div class="text">
                                             <h5>Hello</h5>
                                             <h5>
                                                <span class="word wisteria">World.</span>
                                                <span class="word belize"><?= $_SESSION['username'] ?></span>
                                                <span class="word pomegranate">Friends.</span>
                                                <span class="word green">Everybody.</span>
                                                <span class="word midnight">Good People.</span>
                                             </h5>
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  <!-- Diagram Section -->
                     <!-- Diagram Semua Barang -->
                     <?php
                        $produk = mysqli_query($koneksi, "SELECT produk FROM data_produk GROUP BY kategori");
                        $kuantitas = mysqli_query($koneksi, "SELECT stok FROM data_produk GROUP BY kategori");
                     ?>
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>First Item per Category</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <canvas id="myChart" width="100%"></canvas>
                                          </div>
                                          <script type="text/javascript">
                                             var ctx = document.getElementById('myChart').getContext('2d');
                                             var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                   labels: [<?php while ($barang = mysqli_fetch_array($produk)) { 
                                                            echo '"' . $barang['produk'] . '",';}?>],
                                                   datasets: [{
                                                      label: '# Stock',
                                                      data: [<?php while ($jumlah = mysqli_fetch_array($kuantitas)) { 
                                                            echo '"' . $jumlah['stok'] . '",';} ?>],
                                                      backgroundColor: [
                                                      'rgba(255, 99, 132, 0.2)',
                                                      'rgba(54, 162, 235, 0.2)',
                                                      'rgba(255, 206, 86, 0.2)',
                                                      'rgba(75, 192, 192, 0.2)',
                                                      'rgba(153, 102, 255, 0.2)',
                                                      'rgba(255, 159, 64, 0.2)'
                                                      ],
                                                      borderColor: [
                                                      'rgba(255, 99, 132, 1)',
                                                      'rgba(54, 162, 235, 1)',
                                                      'rgba(255, 206, 86, 1)',
                                                      'rgba(75, 192, 192, 1)',
                                                      'rgba(153, 102, 255, 1)',
                                                      'rgba(255, 159, 64, 1)'
                                                      ],
                                                      borderWidth: 2
                                                   }]
                                                },
                                                options: {
                                                   scales: {
                                                      yAxes: [{
                                                         ticks: {
                                                            beginAtZero: true
                                                         }
                                                      }]
                                                   }
                                                }
                                             });
                                          </script>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Diagram Barang Berdasarkan Kategori -->
                     <?php
                        $sql="SELECT kategori,COUNT(*) AS 'total' FROM data_produk GROUP BY kategori";
                        $hasil = mysqli_query($koneksi, $sql);
                        $kategori = "";
                        $jumlah = null;
                  
                        while ($data = mysqli_fetch_array($hasil)) {
                           $kat = $data['kategori'];
                           $kategori .= "'$kat'". ", ";
                           
                           $jum = $data['total'];
                           $jumlah .= "$jum". ", ";
                        }
                     ?>
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Product Type per Category</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <canvas id="myChart1" width="100%"></canvas>
                                          </div>
                                          <script type="text/javascript">
                                             var ctx = document.getElementById('myChart1').getContext('2d');
                                             var myChart = new Chart(ctx, {
                                                type: 'doughnut',
                                                data: {
                                                   labels: [<?php echo $kategori; ?>],
                                                   datasets: [{
                                                      label: '# Stock',
                                                      data: [<?php echo $jumlah ?>],
                                                      backgroundColor: [
                                                      'rgba(255, 122, 122, 1)',
                                                      'rgba(255, 195, 122, 1)',
                                                      'rgba(210, 255, 133, 1)',
                                                      'rgba(75, 192, 192, 0.2)',
                                                      'rgba(92, 152, 255, 1)',
                                                      'rgba(255, 138, 220, 1)',
                                                      'rgba(130, 251, 255, 0.8)',
                                                      'rgba(193, 193, 193, 0.8)',
                                                      'rgba(242, 187, 255, 0.8)',
                                                      'rgba(162, 255, 171, 0.8)',
                                                      'rgba(248, 255, 121, 0.8)',
                                                      'rgba(114, 221, 255, 0.8)',
                                                      'rgba(255, 117, 173, 0.8)',
                                                      'rgba(106, 255, 226, 0.8)'
                                                      ],
                                                      borderColor: [
                                                      'rgba(255, 20, 20, 1)',
                                                      'rgba(255, 163, 51, 1)',
                                                      'rgba(155, 245, 0, 1)',
                                                      'rgba(75, 192, 192, 1)',
                                                      'rgba(0, 82, 224, 1)',
                                                      'rgba(255, 0, 178, 1)',
                                                      'rgba(0, 246, 255, 0.8)',
                                                      'rgba(41, 41, 41, 0.8)',
                                                      'rgba(216, 53, 255, 0.8)',
                                                      'rgba(49, 255, 69, 0.8)',
                                                      'rgba(241, 255, 1, 0.8)',
                                                      'rgba(21, 198, 255, 0.8)',
                                                      'rgba(255, 0, 103, 0.8)',
                                                      'rgba(12, 255, 208, 0.8)'
                                                      ],
                                                      borderWidth: 1
                                                   }]
                                                },
                                                options: {
                                                   scales: {
                                                      yAxes: [{
                                                         ticks: {
                                                            beginAtZero: true
                                                         }
                                                      }]
                                                   }
                                                }
                                             });
                                          </script>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Tabel 10 Stok Terbanyak -->
                     <div class="row column3">
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>15 Most Stock</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                             <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover">
                                                   <thead class="thead-dark">
                                                         <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Stock</th>
                                                         </tr>
                                                   </thead>
                                                   <tbody>

                                                         <?php 
                                                            $no = 1;
                                                            $query = "SELECT * FROM data_produk ORDER BY stok DESC LIMIT 15";
                                                            $hasil = mysqli_query($koneksi, $query);
                                                            foreach($hasil as $data) {
                                                         ?>

                                                         <tr>
                                                            <td><?php echo $no++; ?></td>
                                                            <td><?php echo $data['produk']; ?></td>
                                                            <td><?php echo $data['stok']; ?></td>
                                                         </tr>
                                                         
                                                         <?php 
                                                            }
                                                         ?>
                                                         
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- 10 Barang Termahal -->
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>15 Least Stock</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                                <div class="table-responsive">
                                                   <table class="table table-bordered table-striped table-hover">
                                                      <thead class="thead-dark">
                                                            <tr>
                                                               <th scope="col">No</th>
                                                               <th scope="col">Product</th>
                                                               <th scope="col">Stock</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>

                                                            <?php 
                                                               $no = 1;
                                                               $query = "SELECT * FROM data_produk ORDER BY stok ASC LIMIT 15";
                                                               $hasil = mysqli_query($koneksi, $query);
                                                               foreach($hasil as $data) {
                                                            ?>

                                                            <tr>
                                                               <td><?php echo $no++; ?></td>
                                                               <td><?php echo $data['produk']; ?></td>
                                                               <td><?php echo $data['stok']; ?></td>
                                                            </tr>
                                                            
                                                            <?php 
                                                               }
                                                            ?>
                                                            
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>


                     <!-- End Diagram -->

                     <!-- Calendar -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Calendar</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <div class="col-lg-12">
                                                <div class="alert alert-warning" role="alert">
                                                   <h4>Schedule of Activities</h4>
                                                </div>
                                                   <form action="kalendarProses.php" method="POST">
                                                      <div class="card-body">
                                                         <div class="form-group">
                                                            <div class="form-label">Activity Description</div>
                                                            <textarea name="kegiatan" class="form-control" id="kegiatan" cols="30" rows="2"></textarea>
                                                         </div>
                                                         <div class="form-group mt-4">
                                                            <div class="form-label">Start Date</div>
                                                            <input type="date" class="form-control" name="mulai" id="mulai">
                                                         </div>
                                                         <div class="form-group mt-4">
                                                            <div class="form-label">End Date</div>
                                                            <input type="date" class="form-control" name="selesai" id="selesai">
                                                         </div>
                                                         <div class="form-group mt-4">
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                         </div>
                                                      </div>
                                                   </form>
                                             </div>
                                             <!-- <div class="container"> -->
                                                <div id="calendar"></div>
                                             <!-- </div> -->
                                             <!-- Update dan Delete Jadwal Kalendar -->
                                             <div class="table-responsive mt-5">
                                                <table class="table table-bordered table-striped table-hover">
                                                   <thead class="thead-dark">
                                                         <tr>
                                                            <th scope="col">Activity Description</th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">End Date</th>
                                                            <th colspan="2" scope="col">Action</th>
                                                         </tr>
                                                   </thead>
                                                   <tbody>

                                                         <?php 
                                                            $query = "SELECT * FROM kalendar_admin";
                                                            $result = mysqli_query($koneksi,$query);
                                                            foreach($result as $data) {
                                                         ?>

                                                         <tr>
                                                            <td><?php echo $data['kegiatan']; ?></td>
                                                            <td><?php echo $data['mulai']; ?></td>
                                                            <td><?php echo $data['selesai']; ?></td>

                                                            <!-- Tombol Update -->
                                                            <td> 
                                                               <?php 
                                                                  echo "<form method='POST' action='kalendarUbah.php'>";
                                                                  echo "<input hidden type='text' name='id' value=$data[id]>";
                                                                  echo "<button type='submit' name='btnUpdate' class='btn btn-success'>";
                                                                  echo "<i class='fa fa-pencil' aria-hidden='true'></i> Update</button></form>";
                                                               ?>
                                                            </td>

                                                            <!-- Tombol Delete -->
                                                            <td>
                                                               <?php  
                                                                  echo "<form onsubmit=\"return confirm ('Anda Yakin Ingin Menghapus Data ?')\" method='POST'>";
                                                                  echo "<input hidden name='id' type='text' value=$data[id]>";
                                                                  echo "<button type='submit' name='btnHapus' class='btn btn-danger'>";
                                                                  echo "<i class='fa fa-trash' aria-hidden='true'></i> Delete</button>";
                                                                  echo "</form>";
                                                               ?> 
                                                            </td>
                                                         </tr>
                                                         
                                                         <?php 
                                                            }
                                                         ?>
                                                         
                                                   </tbody>
                                                </table>

                                                <!-- Fungsi Hapus Data -->
                                                <?php 
                                                if(isset($_POST['btnHapus'])) {
                                                   $id = $_POST['id'];

                                                   if ($koneksi) {
                                                      $sql = "DELETE FROM kalendar_admin WHERE id=$id";
                                                      mysqli_query($koneksi, $sql);
                                                      echo "<script>alert('Data Jadwal Kegiatan Berhasil Dihapus');location='dashboardadm.php';</script>";
                                                   }
                                                }
                                                ?>
                                             
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>                                       

                     
                     


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