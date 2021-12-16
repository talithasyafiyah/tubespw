            <?php
               // GET CONNECTED TO DATABASE
               require_once '../../includes/koneksi.php';

               // SET PAGE TITLE
               $TITLE = "Add Outgoing";

               session_start();
               if(empty($_SESSION['level'])) {
                  echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../../pages/login.php'</script>";
               }

               // CHECK SESSION ID EXISTENCE
               if(!isset($_SESSION['add_id']))
               {
                  header("location: index.php");
               }
               else
               {
                  // SET EVENT_SCHEDULER ON
                  $EVENT_SCHEDULER = "SET GLOBAL event_scheduler = ON";
                  $EVENT_SCHEDULER_QUERY = mysqli_query($koneksi, $EVENT_SCHEDULER);

                  // CREATE A TEMPORARY TABLE TO STORE TEMPORARY DATA
                  $CREATE_TABLE = " CREATE TABLE IF NOT EXISTS `$_SESSION[add_id]` 
                                    (
                                       session_id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                       product_id VARCHAR(30) NOT NULL,
                                       product_name VARCHAR(255) NOT NULL,
                                       quantity VARCHAR(50)
                                    )
                                 ";
                  $CREATE_TABLE_QUERY = mysqli_query($koneksi, $CREATE_TABLE);

                  // CREATE EVENT TO DROP TABLE WHEN USERS DON'T USE IT FOR 1 HOUR
                  $CREATE_EVENT = " CREATE EVENT IF NOT EXISTS `$_SESSION[add_id]`
                                    ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR
                                    DO
                                    DROP TABLE IF EXISTS `$_SESSION[add_id]`
                                 ";
                  $CREATE_EVENT_QUERY = mysqli_query($koneksi, $CREATE_EVENT);

                  // REFRESH PAGE AFTER 1 HOUR (60s * 60 = 3600s)
                  header("refresh: 3600"); 

                  // IF CURRENT PAGE HAS BEEN OPENED FOR 1 HOUR, CLOSE THE PAGE
                  if (isset($_SESSION['add_initiated']) && time() - $_SESSION['add_initiated'] > 3600)
                  {
                     // DELETE NOTIFICATION
                     $DELETE_NOTIFICATION = "DELETE FROM `notification` WHERE link = '$_SESSION[add_id]'";
                     $DELETE_NOTIFICATION_QUERY = mysqli_query($koneksi, $DELETE_NOTIFICATION);
                     
                     unset($_SESSION['add_id']);
                     header("location: index.php");
                  }
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
                              <div class="col-xs-3 col-sm-4 col-md-6 col-lg-7 align-self-center">
                                 <h2>
                                    <i class="fad fa-plus-square fa-md"></i> 
                                    &nbsp Add Outgoing &nbsp;&nbsp
                                    <small>
                                    <i class="fas fa-angle-double-right fa-xs"></i>
                                    &nbsp;&nbsp Insert Transaction 
                                    </small>
                                 </h2>
                              </div>
                              <div class="col-xs-3 col-sm-4 col-md-6 col-lg-5 align-self-center text-right">  
                                 <i class="fad fa-calendar-week fa-md"></i>   
                                 <span class="font-weight-bold">&nbsp Date/Time : 
                                    <span class="text-primary" id="timestamp">
                                       <?php
                                          // DISPLAY CURRENT DATE
                                          echo date("D, j M Y, H:i:s");
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
                     <div class="row" style="width: 1008.22">
                        <div class="col-lg-5" style="width: 420.09px">
                           <table class="table table-bordered my-2">
                              <form method="POST" action="" id="Product" onsubmit="return true">
                                 <thead class="thead">
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold" colspan="2">
                                          <i class="fad fa-box-full fa-md"></i>
                                          &nbsp Select Product
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="col-lg-12 col-md-8">
                                          <select name="select-items" id="select-items" class="w-100">
                                             <option value='0'>Select Product</option>
                                             <?php 
                                                $SELECT_TABLE = "SELECT * FROM data_produk";
                                                $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);

                                                if ($SELECT_TABLE_QUERY -> num_rows > 0)
                                                {
                                                   while ($ROW = $SELECT_TABLE_QUERY -> fetch_assoc()) // HERE $ROW IS ARRAY
                                                   {
                                                      echo "<option value=".$ROW['id_barang'].">" . $ROW['produk'] . ' ' . $ROW['harga'] . '(pcs)' ."</option>"; 
                                                   }
                                                }
                                             ?>
                                             <?php
                                                if (isset($_POST['add_item']))
                                                {
                                                   $TEMP_PRODUCT_ID = $_POST['select-items'];
                                                   $TEMP_QUANTITY = $_POST['quantity'];
                  
                                                   if ($TEMP_PRODUCT_ID == "0" && empty($TEMP_QUANTITY) || $TEMP_PRODUCT_ID == "0" && !empty($TEMP_QUANTITY) )
                                                   {
                                                      $STATUS['error'] = "Please select at least 1 product!";
                                                   }
                                                   else if ($TEMP_PRODUCT_ID != "0" && empty($TEMP_QUANTITY))
                                                   {
                                                      $STATUS['error'] = "Please fill the quantity field!";
                                                   }
                                                   else if ($TEMP_PRODUCT_ID != "0" && $TEMP_QUANTITY <= 0)
                                                   {
                                                      $STATUS['error'] = "Quantity must be greater than 0!";
                                                   }
                                                   else
                                                   {
                                                      $SELECT_TABLE = "SELECT * FROM data_produk WHERE id_barang = '$TEMP_PRODUCT_ID' LIMIT 1";
                                                      $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);
                  
                                                      if (mysqli_num_rows($SELECT_TABLE_QUERY) > 0)
                                                      {
                                                         $ROW = mysqli_fetch_array($SELECT_TABLE_QUERY);
                                                         $STOCK_AVAILABLE = isset($ROW['stok']) ? $ROW['stok'] : '';
                                                         $PRODUCT_BRAND = isset($ROW['produk']) ? $ROW['produk'] : '';
                  
                                                         if ($TEMP_QUANTITY > $STOCK_AVAILABLE === false)
                                                         {
                                                            $STATUS['success'] = "Item successfully added!";
                                                            $REDUCE_STOCK = "UPDATE data_produk SET stok = $STOCK_AVAILABLE - $TEMP_QUANTITY WHERE id_barang ='$TEMP_PRODUCT_ID'";
                                                            $REDUCE_STOCK_QUERY = mysqli_query($koneksi, $REDUCE_STOCK);  
                                                            
                                                            $INSERT_DATA = "INSERT INTO `$_SESSION[add_id]` (product_id, product_name, quantity) VALUES ('$TEMP_PRODUCT_ID', '$PRODUCT_BRAND', '$TEMP_QUANTITY')";
                                                            $INSERT_DATA_QUERY = mysqli_query($koneksi, $INSERT_DATA);
                                                         }
                                                         else
                                                         {
                                                            $STATUS['error'] = "Insufficient stock (stock remaining : $STOCK_AVAILABLE)";
                                                         }
                                                      }
                                                   }
                                                }
                                             ?>
                                          </select>
                                       </td>
                                       <td>
                                          <input type="number" name="quantity" placeholder="Qty" class="form-control" style="height: 28px; width: 68px">
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
                                                justify-content-center d-flex align-items-center mb-0 py-1 px-0" role="alert" style="height: 28px; width: 300.14px" id="alert">
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
                                       <td colspan="2">                                         
                                          <button type="submit" name="add_item" id="add_item" class="btn btn-outline-success px-2 py-1 rounded" style="height: 28px">
                                          <span class="far fa-plus-circle fa-lg"></span> 
                                          <span >&nbsp Add</span>
                                          </button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </form>
                           </table>
                        </div>
                        <div class="col-lg-7">
                           <table class="table table-bordered my-2" style="table-layout: fixed">
                              <form method="POST">
                                 <thead>
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold" colspan="2">
                                          <i class="fad fa-shopping-cart fa-md"></i>
                                          &nbsp Details
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="input-group align-items-center " >
                                             <label class="col-sm-3 px-0 mb-0 mr-2" style="font-size: 10px">Outgoing Date</label>
                                             <input type="date" name="out_date" id="out_date" value="<?php echo date('Y-m-d'); ?>" class="col-lg-10 col-sm-6 col-md-6 form-control mr-2" style="height: 28px;">
                                          </div>
                                       </td>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2 small">Outgoing ID</label>
                                             <input type="text" name="out_id" id="out_id" value="<?php echo $_SESSION['add_id']; ?>" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2 px-1 text-center" style="height: 28px; font-size: 12.5px; background-color: graysmoke" readonly>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">Customer</label>
                                             <input type="text" name="customer" id="customer" value="<?php if(isset($_POST['customer'])) echo $_POST['customer'] ?>" class="col-lg-12 col-sm-7 col-md-6 form-control mr-2" style="height: 28px">
                                          </div>
                                       </td>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">Misc.</label>
                                             <input type="text" name="misc" id="misc" value="" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px" >
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                           </table>
                                 
                           <table class="table table-bordered mb-2 mx-auto p-auto" style="table-layout: fixed">
                              <thead>
                                 <tr>
                                    <th class="font-weight-bold align-middle" style="border-bottom: none">ID Barang</th>
                                    <th class="font-weight-bold align-middle" style="border-bottom: none">Nama Barang</th>
                                    <th class="font-weight-bold align-middle" style="border-bottom: none">Quantity</th>
                                    <th class="font-weight-bold form-check form-switch" style="border-bottom: none">
                                       <input type="checkbox" id="select-all" name="select-all" class="form-check-input ml-1" >
                                          <a class="ml-5">&nbsp Select All</a> 
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $SELECT_TABLE = "SELECT * FROM `$_SESSION[add_id]`";
                                    $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);

                                    foreach ($SELECT_TABLE_QUERY as $DATA)
                                    {
                                       echo "<tr>";
                                       echo     "<td class='text-left align-middle'><input class='w-100' style='border: 0' type='text' value=$DATA[product_id] readonly></td>";  
                                       echo     "<td class='text-left align-middle'>" . "<input class='w-100' style='border: 0' type='text' value='".$DATA['product_name']."' readonly>" . "</td>";  
                                       echo     "<td class='text-left align-middle'><input class='w-100' style='border: 0' type='text' value=$DATA[quantity] readonly></td>";
                                       echo     "<td class='text-left'>";
                                       echo           "<input type='hidden' name='date' value='".date('D, j M Y, H:i:s')."'>";
                                       echo           "<input type='hidden' name='product_id[]' value=$DATA[product_id]>";
                                       echo           "<input type='hidden' name='product_name[]' value='".$DATA['product_name']."'>";
                                       echo           "<input type='hidden' name='temp_quantity[]' value=$DATA[quantity]>";
                                       echo           "<input type='checkbox' name='check_product[]' value=$DATA[session_id] class='form-check-input mx-0 my-0' style='right: 70.775px; width: 20px; height: 20px'>";
                                       echo     "</td>";  
                                       echo  "</tr>";
                                    }
                                 ?>                                  
                              </tbody>
                           </table>       
                              <button type="submit" name="save" class="btn btn-primary mb-2 mr-2 px-2 py-2 rounded toggle-all w-auto" style="width: 66.74px" onclick="return confirm('Are you sure want to save this data?');">
                                 <span class="far fa-save fa-md"></span> 
                                 <span >&nbsp Save</span>
                              </button>
                           <div class="text-right float-right">
                              <button type="submit" name="delete_record" class="btn btn-danger mb-2 px-2 py-2 rounded w-auto" style="width: 144.54px" onclick="return confirm('Are you sure want to delete selected item(s)?');">
                                 <span class="far fa-trash fa-lg"></span> &nbsp 
                                 <span id="delete-lable">Delete Selected</span>
                              </button>
                           </div>
                              <button type="submit" name="cancel" class="btn btn-secondary mb-2 px-2 py-2 rounded toggle-all w-auto" style="width: 66.74px" onclick="return confirm('Are you sure want to cancel? Any changes you made will not be saved!')">
                                 <span class="far fa-arrow-left fa-md"></span>
                                 <span >&nbsp Back</span>
                              </button>
                        </form>
                           <?php
                              // CANCEL
                              if (isset($_POST['cancel']))
                              {  
                                 if(isset($_POST['date']))
                                 {
                                    // COUNT NUMBER OF CHECKBOXES CHECKED
                                    $CHECKBOXES = count($_POST['check_product']);
                                    $TEMP_PRODUCT_ID = $_POST['product_id'];
                                    $TEMP_QUANTITY = $_POST['temp_quantity'];

                                    for ($I = 0; $I < $CHECKBOXES; $I++)
                                    {
                                       $RECORD_TO_DELETE = $_POST['check_product'][$I];
                                       $DELETE_TEMP = "DELETE FROM `$_SESSION[add_id]` WHERE `session_id` = '$RECORD_TO_DELETE'";
                                       $DELETE_TEMP_QUERY = mysqli_query($koneksi, $DELETE_TEMP);

                                       $SELECT_TABLE = "SELECT * FROM data_produk WHERE id_barang = '$TEMP_PRODUCT_ID[$I]' LIMIT 1";
                                       $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);

                                       $ROW = mysqli_fetch_array($SELECT_TABLE_QUERY);
                                       $STOCK_AVAILABLE = isset($ROW['stok']) ? $ROW['stok'] : '';                
                                       
                                       $RESTORE_STOCK = "UPDATE data_produk SET stok = $STOCK_AVAILABLE + $TEMP_QUANTITY[$I] WHERE id_barang ='$TEMP_PRODUCT_ID[$I]'";
                                       $RESTORE_STOCK_QUERY = mysqli_query($koneksi, $RESTORE_STOCK);
                                    }

                                    $DELETE_TABLE = "DROP TABLE `$_SESSION[add_id]`";
                                    $DELETE_TABLE_QUERY = mysqli_query($koneksi, $DELETE_TABLE);

                                    $DELETE_NOTIFICATION = "DELETE FROM `notification` WHERE link = '$_SESSION[add_id]'";
                                    $DELETE_NOTIFICATION_QUERY = mysqli_query($koneksi, $DELETE_NOTIFICATION);

                                    $DROP_EVENT = "DROP EVENT `$_SESSION[add_id]`";
                                    $DROP_EVENT_QUERY = mysqli_query($koneksi, $DROP_EVENT);

                                    unset($_SESSION['add_id']);

                                    echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
                                 }
                                 else
                                 {
                                    $DELETE_TABLE = "DROP TABLE `$_SESSION[add_id]`";
                                    $DELETE_TABLE_QUERY = mysqli_query($koneksi, $DELETE_TABLE);

                                    $DELETE_NOTIFICATION = "DELETE FROM `notification` WHERE link = '$_SESSION[add_id]'";
                                    $DELETE_NOTIFICATION_QUERY = mysqli_query($koneksi, $DELETE_NOTIFICATION);

                                    $DROP_EVENT = "DROP EVENT `$_SESSION[add_id]`";
                                    $DROP_EVENT_QUERY = mysqli_query($koneksi, $DROP_EVENT);

                                    unset($_SESSION['add_id']);

                                    echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
                                 }
                              }

                              // DELETE RECORD
                              if (isset($_POST['delete_record']))
                              { 
                                 if(isset($_POST['date']))
                                 {
                                    if(isset($_POST['check_product']))
                                    {
                                       // COUNT NUMBER OF CHECKBOXES CHECKED
                                       $SELECTOR = $_POST['check_product'];
                                       $CHECKBOXES = count($SELECTOR);
                                       $TEMP_PRODUCT_ID = $_POST['product_id'];
                                       $TEMP_QUANTITY = $_POST['temp_quantity'];

                                       for ($I = 0; $I < $CHECKBOXES; $I++)
                                       {
                                          $RECORD_TO_DELETE = $SELECTOR[$I];
                                          $INDEX_INCREMENT = $SELECTOR[$I] - 1;
                                          $DELETE_TEMP = "DELETE FROM `$_SESSION[add_id]` WHERE `session_id` = '$RECORD_TO_DELETE'";
                                          $DELETE_TEMP_QUERY = mysqli_query($koneksi, $DELETE_TEMP);

                                          $SELECT_TABLE = "SELECT * FROM data_produk WHERE id_barang = '$TEMP_PRODUCT_ID[$INDEX_INCREMENT]' LIMIT 1";
                                          $SELECT_TABLE_QUERY = mysqli_query($koneksi, $SELECT_TABLE);

                                          $ROW = mysqli_fetch_array($SELECT_TABLE_QUERY);
                                          $STOCK_AVAILABLE = isset($ROW['stok']) ? $ROW['stok'] : '';                
                                          
                                          $RESTORE_STOCK = "UPDATE data_produk SET stok = $STOCK_AVAILABLE + $TEMP_QUANTITY[$INDEX_INCREMENT] WHERE id_barang ='$TEMP_PRODUCT_ID[$INDEX_INCREMENT]'";
                                          $RESTORE_STOCK_QUERY = mysqli_query($koneksi, $RESTORE_STOCK);
                                       }
                                       echo "<script>setTimeout(\"location.href = 'add-outgoing.php?session_id=$_SESSION[add_id]';\");</script>";
                                    }
                                    else
                                    {
                                       echo '<script>alert("Please check at least one checkbox!")</script>';
                                    }
                                 }
                                 else
                                 {
                                    echo '<script>alert("There is no record to delete!")</script>';
                                 }
                              }

                              // SAVE DATA
                              if(isset($_POST['save']))
                              {
                                 if(isset($_POST['date']))
                                 {
                                    if(!empty($_POST['customer']) && !empty($_POST['misc']))
                                    {
                                       // COUNT NUMBER OF CHECKBOXES CHECKED
                                       $CHECKBOXES = count($_POST['check_product']);
                                       $TEMP_PRODUCT_ID = $_POST['product_id'];
                                       $TEMP_PRODUCT_NAME = $_POST['product_name'];
                                       $TEMP_QUANTITY = $_POST['temp_quantity'];
                                       $CUSTOMER = mysqli_real_escape_string($koneksi, $_POST['customer']);
                                       $OUTGOING_DATE = mysqli_real_escape_string($koneksi, $_POST['date']);
                                       $MISCELLANEOUS = mysqli_real_escape_string($koneksi, $_POST['misc']);
                                       $OUTGOING_ID = mysqli_real_escape_string($koneksi, $_POST['out_id']);
                                       
                                       // VARIABLE TO outgoing TABLE
                                       $SERIAL_NUMBER = array();
                                       $PRODUCT_ID = array();
                                       $PRODUCT_NAME = array();
                                       $QUANTITY = array();

                                       for($I = 1; $I <= $CHECKBOXES; $I++)
                                       {
                                          array_push($SERIAL_NUMBER, $I);
                                          array_push($PRODUCT_ID, $TEMP_PRODUCT_ID[$I - 1]);
                                          array_push($PRODUCT_NAME, $TEMP_PRODUCT_NAME[$I - 1]);
                                          array_push($QUANTITY, $TEMP_QUANTITY[$I - 1]);
                                       }

                                       $IMPLODED_SERIAL_NUMBER = implode(", ", $SERIAL_NUMBER);
                                       $IMPLODED_PRODUCT_ID = implode(", ", $PRODUCT_ID);
                                       $IMPLODED_PRODUCT_NAME = implode(", ", $PRODUCT_NAME);
                                       $IMPLODED_QUANTITY = implode(", ", $QUANTITY);
                                       $TOTAL_ITEMS = array_sum($QUANTITY);

                                       $INSERT_DATA = "INSERT INTO `outgoing` (outgoing_date, outgoing_id, customer, misc, serial_number, product_id, product_name, quantity, total_items) VALUES ('$OUTGOING_DATE', '$OUTGOING_ID', '$CUSTOMER', '$MISCELLANEOUS', '$IMPLODED_SERIAL_NUMBER', '$IMPLODED_PRODUCT_ID', '$IMPLODED_PRODUCT_NAME', '$IMPLODED_QUANTITY', '$TOTAL_ITEMS')";
                                       $INSERT_DATA_QUERY = mysqli_query($koneksi, $INSERT_DATA);

                                       $DELETE_TABLE = "DROP TABLE `$_SESSION[add_id]`";
                                       $DELETE_TABLE_QUERY = mysqli_query($koneksi, $DELETE_TABLE);

                                       $DELETE_NOTIFICATION = "DELETE FROM `notification` WHERE link = '$_SESSION[add_id]'";
                                       $DELETE_NOTIFICATION_QUERY = mysqli_query($koneksi, $DELETE_NOTIFICATION);

                                       $DROP_EVENT = "DROP EVENT `$_SESSION[add_id]`";
                                       $DROP_EVENT_QUERY = mysqli_query($koneksi, $DROP_EVENT);

                                       unset($_SESSION['add_id']);

                                       echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
                                    }
                                    else
                                    {
                                       echo '<script>alert("Customer`s name and misc cannot be empty!")</script>';
                                    }
                                 }
                                 else
                                 {
                                    echo '<script>alert("There is no data to save!")</script>';                                   
                                 }
                              }
                           ?>                          
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- END OF CONTENT -->
         <!-- FOOTER -->
         <?php require_once('footer.php'); ?>
            