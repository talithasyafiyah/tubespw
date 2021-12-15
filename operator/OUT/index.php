            <?php require_once('header.php'); ?>
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
                           <a href="add-issuing.php" class="btn btn-outline-success py-2 px-2 rounded">
                           <i class="fas fa-plus-square fa-lg"></i> 
                           <span >&nbsp Add Issuing</span>
                           </a>
                        </h2>
                  </div>
               </div>
            </div>
            <div class="row column1">
               <div class="col-lg-12">
                  <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                           <div class="heading1 margin_0">
                              <h2>Result</h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table">
                              <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead class="thead-dark">
                                       <tr>
                                          <th class="text-left align-middle font-weight-bold">No.</th>
                                          <th class="text-left align-middle font-weight-bold">Tanggal</th>
                                          <th class="text-left align-middle font-weight-bold">No. Referensi</th>
                                          <th class="text-left align-middle font-weight-bold">Customer</th>
                                          <th class="text-left align-middle font-weight-bold">Items Qty</th>
                                          <th class="text-left align-middle font-weight-bold">Misc</th>
                                          <th class="text-center align-center font-weight-bold" data-orderable="false">Details</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          require_once '../../includes/koneksi.php';
                                          
                                          $SQL = "SELECT * FROM out_product";
                                          $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                          
                                          if ($SQL_QUERY -> num_rows >0)
                                          {
                                             while ($ROW = $SQL_QUERY -> fetch_assoc())
                                             {
                                                echo "<tr>
                                                         <form method='GET' action='issuing-details.php?id=$ROW[no]'>
                                                            <td class='text-left align-middle'>". $ROW['no'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['tanggal'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['ref_no'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['customer'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['items_qty'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['misc'] ."</td>
                                                            <td class='text-center align-center'>
                                                               <input type='hidden' name='id' value=" . $ROW['no'] . "> 
                                                               <button title='Details' class='btn btn-outline-info d-inline-block justify-content-center'>
                                                                  <i class='fad fa-folder-open green2_color fa-lg'></i>
                                                               </button>
                                                         </form
                                                            </td>
                                                      </tr>";
                                             }
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
            <?php require_once('footer.php'); ?>
            <script>
               $(document).ready(function() 
               {
                  $('#dataTable').DataTable();
               });
            </script>