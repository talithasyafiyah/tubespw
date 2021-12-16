            <?php
               // GET CONNECTED TO DATABASE
               require_once '../../includes/koneksi.php';

               // SET PAGE TITLE
               $TITLE = "Outgoing Details";

               session_start();
               if(empty($_SESSION['level'])) {
                  echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../../pages/login.php'</script>";
               }

               // REGENERATE NEW ID EACH TIME PAGE LOAD
               session_regenerate_id();

               // CHECK SESSION ID EXISTENCE
               if(!isset($_GET['id']))
               {
                  header("location: index.php");
               }

               $SELECT_TABLE = "SELECT * FROM outgoing WHERE user_id = '$_GET[id]'";
               $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);
               
               if ($SELECT_TABLE_QUERY -> num_rows > 0)
               {
                  $ROW = $SELECT_TABLE_QUERY -> fetch_assoc();
               }

               // INCLUDE HEADER TEMPLATE TO SHORTEN THE CODE
               // MUST BE PLACED AFTER SESSION DECLARATION TO AVOID ERROR   
               require_once('header.php');
            ?>
            <!-- END OF HEADER -->
            <!-- CONTENT -->
            <div class="midde_cont">
            <div class="container-fluid">
            <div class="row column_title">
               <div class="col-md-12">
                  <div class="page_title">
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 align-self-center">
                           <h2>
                              <i class="fad fa-info-square fa-lg"></i> 
                              &nbsp Outgoing Details
                           </h2>
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pr-4 align-self-center text-left" style="padding-inline-start: 13rem">     
                           <span class="font-weight-bold">
                              Outgoing ID : 
                              <span class="text-danger">
                                 <?php echo $ROW['outgoing_id']; ?>
                              </span>
                           </span>
                           <br>
                           <span class="font-weight-bold">
                              Tanggal : 
                              <span class="text-success">
                                 <?php echo $ROW['outgoing_date']; ?>
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
                           <div class="row">
                              <div class="col-lg-8 d-inline px-4">
                                 <h2>
                                    Customer : 
                                    <span>
                                       <?php echo $ROW['customer']; ?>
                                    </span>
                                 </h2>
                              </div>
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pr-4 align-self-center text-right">
                                 <a href="print-report.php?id=<?php echo $_GET['id']; ?>" class="btn btn-outline-primary py-2 px-2 rounded">
                                    <i class="fad fa-print fa-lg"></i> 
                                    <span>&nbsp Print</span>
                                 </a>
                                 <i class="far fa-grip-lines-vertical fa-lg align-middle"></i>
                                 <form method="POST" class="d-inline">
                                    <button type="submit" name='edit-outgoing' class="btn btn-outline-info py-2 px-2 rounded">
                                       <span class="fad fa-edit fa-lg"></span> 
                                       <span>&nbsp Edit</span>
                                    </button>
                                 </form>
                                 <?php
                                    // CHECK IF BUTTON add-outgoing IS PRESSED OR NOT
                                    if(isset($_POST['edit-outgoing']))
                                    {  
                                       if(!isset($_SESSION['edit_id']))
                                       {
                                          // DECLARE SESSION ID ACCORDING TO TABLE FUNCTION                                                           
                                          $_SESSION['edit_id'] = session_id();
                                          $_SESSION['id'] = $_GET['id'];

                                          // SET LIMITER VARIABLE TO LIMIT DATA INSERTION
                                          $_SESSION['limiter'] = 0;

                                          // DECLARE TIME WHERE SESSION INITIATED
                                          $_SESSION['edit_initiated'] = time();
                                          $_SESSION['edit_notification_time'] = date("H:i");

                                          // ADD NOTIFICATION
                                          $INSERT_DATA = "INSERT INTO `notification` (link, `time`, `user_id`, `type`) VALUES ('$_SESSION[edit_id]', '$_SESSION[edit_notification_time]', $_GET[id], 'edit')";
                                          $INSERT_DATA_QUERY = mysqli_query($koneksi, $INSERT_DATA);

                                          // REDIRECT USER TO add-outgoing.php WITH SESSION ID WITHIN
                                          echo "<script>setTimeout(\"location.href = 'edit-outgoing.php?id=$_GET[id]&session_id=$_SESSION[edit_id]';\");</script>";
                                       }
                                       else
                                       {
                                          echo '<script>alert("Ooops! you have unfinished task, please check your notification box!")</script>';
                                       }
                                    }
                                 ?>
                              </div>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table">
                              <table class="table table-striped table-bordered" id="detailsTable" style="background-image: url('../images/layout_img/pattern_h.png');">
                                 <thead class="thead-dark">
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold">No.</th>
                                       <th class="text-left align-middle font-weight-bold">ID Barang</th>
                                       <th class="text-left align-middle font-weight-bold">Nama Barang</th>
                                       <th class="text-left align-middle font-weight-bold">Quantity</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       require_once '../../includes/koneksi.php';
                                       
                                       $SELECT_TABLE = "SELECT * FROM outgoing WHERE user_id = '$_GET[id]'";
                                       $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);
                                       
                                       if ($SELECT_TABLE_QUERY -> num_rows > 0)
                                       {
                                          // HERE $ROW IS ARRAY
                                          while($ROW = $SELECT_TABLE_QUERY -> fetch_assoc()) 
                                          { 
                                             // HERE $ROW['product_id'] IS STRING
                                             $SERIAL_NUMBER = explode(", ", $ROW['serial_number']);
                                             $ID_BARANG = explode(", ", $ROW['product_id']); 
                                             $INDEX_ID_BARANG = 0;
                                             $NAMA_BARANG = explode(", ", $ROW['product_name']);                                                        
                                             $INDEX_NAMA_BARANG = 0;
                                             $QUANTITY = explode(", ", $ROW['quantity']);   
                                             $INDEX_QUANTITY = 0; 
                                             // EXPLODE $ROW['serial_number'] AS ARRAY AND THEN CONVERT TO STRING                                
                                             foreach($SERIAL_NUMBER as $RESULT)
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
                              <?php 
                                    $TOTAL_ITEMS = end($SERIAL_NUMBER); 

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
            <?php require_once('footer.php'); ?>