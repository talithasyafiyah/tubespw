            <?php
               // GET CONNECTED TO DATABASE
               require_once '../../includes/koneksi.php';   
               
               // SET PAGE TITLE
               $TITLE = "Outgoing Product";

               session_start();
               if(empty($_SESSION['level'])) {
                  echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../../pages/login.php'</script>";
               }

               // REGENERATE NEW ID EACH TIME PAGE LOAD
               session_regenerate_id();

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
                        <h2>
                           <i class="fas fa-truck fa-sm"></i> &nbsp Outgoing Product &nbsp;&nbsp
                           <small><i class="fas fa-angle-double-right fa-xs"></i></small> 
                              &nbsp;&nbsp
                           <form method="POST" class="d-inline">
                              <button type="submit" name='add-outgoing' class="btn btn-outline-success py-2 px-2 rounded">
                                 <span class="fas fa-plus-square fa-lg"></span> 
                                 <span >&nbsp Add Outgoing</span>
                              </button>
                           </form>
                           <?php
                              // CHECK IF BUTTON add-outgoing IS PRESSED OR NOT
                              if(isset($_POST['add-outgoing']))
                              {  
                                 if(!isset($_SESSION['add_id']))
                                 {
                                    // DECLARE SESSION ID ACCORDING TO TABLE FUNCTION                                                                           
                                    $_SESSION['add_id'] = session_id();

                                    // DECLARE TIME WHERE SESSION INITIATED
                                    $_SESSION['add_initiated'] = time();
                                    $_SESSION['add_notification_time'] = date("H:i");

                                    // ADD NOTIFICATION
                                    $INSERT_DATA = "INSERT INTO `notification` (link, `time`, `type`) VALUES ('$_SESSION[add_id]', '$_SESSION[add_notification_time]', 'add')";
                                    $INSERT_DATA_QUERY = mysqli_query($koneksi, $INSERT_DATA);

                                    // REDIRECT USER TO add-outgoing.php WITH SESSION ID WITHIN
                                    echo "<script>setTimeout(\"location.href = 'add-outgoing.php?session_id=$_SESSION[add_id]';\");</script>";
                                 }
                                 else
                                 {
                                    echo '<script>alert("Ooops! you have unfinished task, please check your notification box!")</script>';
                                 }
                              }
                           ?>
                        </h2>
                  </div>
               </div>
            </div>
            <div class="row column1">
               <div class="col-lg-12">
                  <div class="white_shd full margin_bottom_30" style="background-image: url('../images/layout_img/pattern_h.png');">
                        <div class="full graph_head">
                           <div class="row">
                              <div class="col-lg-12 d-inline px-4">
                                 <h2>Result</h2>
                              </div>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table">
                              <table class="table table-striped table-bordered table-hover" id="summary" style="background-image: url('../images/layout_img/pattern_h.png');">
                                    <thead class="thead-dark">
                                       <tr>
                                          <th class="text-left align-middle font-weight-bold">UID</th>
                                          <th class="text-left align-middle font-weight-bold">Outgoing Date</th>
                                          <th class="text-left align-middle font-weight-bold">Outgoing ID</th>
                                          <th class="text-left align-middle font-weight-bold">Customer</th>
                                          <th class="text-left align-middle font-weight-bold">Total Items</th>
                                          <th class="text-left align-middle font-weight-bold">Misc</th>
                                          <th class="text-center align-center font-weight-bold" data-orderable="false">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          // SELECT ALL FROM TABLE NAMED outgoing
                                          $SELECT_TABLE = "SELECT * FROM outgoing";
                                          $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);
                                          
                                          // CHECK outgoing's ROW AMOUNT
                                          if ($SELECT_TABLE_QUERY -> num_rows > 0)
                                          {
                                             // DECLARING $ROW AS AN ARRAY 
                                             while ($ROW = $SELECT_TABLE_QUERY -> fetch_assoc())
                                             {
                                                echo "<tr>
                                                         <form method='POST'>
                                                            <td class='text-left align-middle'>". $ROW['user_id'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['outgoing_date'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['outgoing_id'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['customer'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['total_items'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['misc'] ."</td>
                                                            <td class='text-center align-center'>
                                                               <input type='hidden' name='id' value=" . $ROW['user_id'] . "> 
                                                               <button type='submit' name='details' title='Details' class='btn btn-outline-info'>
                                                                  <span class='fad fa-folder-open fa-md'></span>
                                                               </button>
                                                               <button type='submit' name='delete' title='Delete' class='btn btn-outline-danger' onclick=\"return confirm('Are you sure want to delete this record?')\";>
                                                                  <span class='fad fa-trash fa-md'></span>
                                                               </button>
                                                         </form
                                                            </td>
                                                      </tr>";
                                             }
                                          }
                                          if(isset($_POST['details']))
                                          {
                                             echo "<script>setTimeout(\"location.href = 'outgoing-details.php?id=$_POST[id]';\");</script>";
                                          }
                                          if(isset($_POST['delete']))
                                          {
                                             $DELETE_DATA = "DELETE FROM `outgoing` WHERE `user_id` = '$_POST[id]'";
                                             $DELETE_DATA_QUERY = mysqli_query($koneksi, $DELETE_DATA);

                                             echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
                                          }
                                       ?>
                                    </tbody>
                              </table>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
            <!-- END OF CONTENT -->
            
            <!-- FOOTER -->
            <?php 
               // INCLUDE FOOTER TEMPLATE TO SHORTEN THE CODE
               require_once('footer.php'); 
            ?>