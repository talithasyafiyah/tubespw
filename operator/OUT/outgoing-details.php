            <?php require_once('header.php'); ?>
            <!-- END OF HEADER -->
            <!-- CONTENT -->
            <div class="midde_cont">
            <div class="container-fluid">
            <div class="row column_title">
               <div class="col-md-12">
                  <div class="page_title">
                     <div class="row">
                        <div class="col-xs-3 col-sm-4 col-md-4 col-lg-6 align-self-center">
                           <h2>
                              <i class="fad fa-info-square fa-lg"></i> 
                              &nbsp Issuing Details
                           </h2>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 pr-0 align-self-center text-center">
                           <a href="print-report.php" class="btn btn-outline-primary py-2 px-2 rounded">
                              <i class="fad fa-print fa-lg"></i> 
                              <span>&nbsp Print</span>
                           </a>
                           <i class="far fa-grip-lines-vertical fa-lg"></i> 
                           <a href="edit-issuing.php" class="btn btn-outline-info py-2 px-2 rounded">
                              <i class="fad fa-edit fa-lg"></i> 
                              <span>&nbsp Edit</span>
                           </a>
                        </div>
                        <div class="col-xs-3 col-sm-4 col-md-4 col-lg-3 pr-0 align-self-center">     
                           <span class="font-weight-bold">No. Referensi : <span class="text-danger">PHP HERE</span></span>
                           <span class="font-weight-bold">Tanggal : <span class="text-success">PHP HERE</span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row column1">
               <div class="col-lg-12">
                  <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                           <div class="heading1 margin_0">
                              <h2>Customer : <span>PHP HERE</span></h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table">
                              <table class="table table-striped table-bordered" id="detailsTable">
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
                                          
                                          $SQL = "SELECT * FROM add_issuing WHERE id = '$_GET[id]'";
                                          $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                          
                                          if ($SQL_QUERY -> num_rows > 0)
                                          {
                                             while($ROW = $SQL_QUERY -> fetch_assoc()) // HERE $ROW IS ARRAY
                                             { 
                                                
                                                $ID_BARANG = explode(",", $ROW['id_barang']);
                                                $INDEX_ID_BARANG = 0;
                                                $NAMA_BARANG = explode(",", $ROW['nama_barang']);                                                        
                                                $INDEX_NAMA_BARANG = 0;
                                                $QUANTITY = explode(",", $ROW['quantity']);   
                                                $INDEX_QUANTITY = 0;                                  
                                                foreach(explode(",", $ROW['no_barang']) as $RESULT)
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
                              <span class="font-weight-bold">TOTAL JENIS BARANG : 
                              <span class="text-success" id="val">
                              <?php 
                                    $TOTAL_ITEMS = array_sum($QUANTITY); 
                                    
                                    if($TOTAL_ITEMS > 1)
                                    {
                                       print_r($TOTAL_ITEMS." ITEMS");
                                    }
                                    else
                                    {
                                       print_r($TOTAL_ITEMS." ITEM");
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