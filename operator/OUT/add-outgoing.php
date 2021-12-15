<?php 

   require_once('header.php'); 
   
?>
               <!-- end of header -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Add Issuing</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-lg-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Basic Table</h2>
                                 </div>
                              </div>
                                 <div class="table_section padding_infor_info">
                                    <div class="table">
                                    
                                    <table class="table" id="dataTable">
                                       <thead >
                                          <tr>
                                             <th class="text-left align-left font-weight-bold">ID_Keluar</th>
                                             <th class="text-left align-left font-weight-bold">ID_Barang</th>
                                             <th class="text-left align-left font-weight-bold">Tanggal</th>
                                             <th class="text-left align-left font-weight-bold">Keterangan</th>
                                             <th class="text-left align-left font-weight-bold">Quantity</th>
                                             <th class="text-left align-left font-weight-bold" data-orderable="false">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php

                                          require_once '../../includes/koneksi.php';

                                          $SQL = "SELECT * FROM out_product";
                                          $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                          
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
<?php require_once('footer.php'); ?>