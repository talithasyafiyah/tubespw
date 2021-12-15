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
      <!-- select option js -->
      <script src="../../operator/js/select2.min.js"></script>   
      <!-- ckeditor -->
      <script src="../../../tubes-1/ckeditor/ckeditor.js"></script>
      <script>
         
         // SORTING SELECT OPTION AND RETAIN FIRST ELEMENT ON TOP
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

         // SELECT OPTION WITH SEARCH BAR
         $(document).ready(function()
         {
            $('#select-items').select2();

            // SORT SELECT OPTION IN ASCENDING ORDER
            sortSelectOptions('#select-items', true);

             // CREATE SEARCH BAR AND PAGINATION IN TABLE WITH ID summary
            $('#summary').DataTable();
            
         });
         
         // CLOSE ALERT AFTER CERTAIN SECONDS
         $("#alert").delay(3000).fadeOut(3000, function()
         {
            $("#alert").addClass("d-none");
         });

         // SELECT ALL CHECKBOXES USING SWITCH BUTTON
         var tableElement = $('table');
         tableElement.on('change', 'input[type=checkbox]', function(event) 
         {
            var changed = event.target,

            // GET ALL CHECKBOXES EXCLUDING ONE NAMED select-all 
            checkboxes = tableElement .find('input[type=checkbox]').not('#select-all');

            // IF select-all IS TOGGLED ON OR OFF, TOGGLE ALL CHECKBOXES TOO
            if (changed.id === 'select-all') 
            {
               checkboxes.prop('checked', changed.checked)
               $("#delete-lable").html($("#delete-lable").html() === 'Delete All' ? 'Delete Selected' : 'Delete All')
            } 
            else 
            {
               var allChecked = checkboxes.length === checkboxes.filter(':checked').length  
               $('#select-all').prop('checked', allChecked);
            }
         });

         $(".toggle-all:button").click(function() 
         {
            var checked = !$(this).data('checked');
            $('input:checkbox').prop('checked', checked);
         });

         var timestamp = document.getElementById('timestamp');
         var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
         var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
         function time() 
         {
            var curDate = new Date();
            var day = days[curDate.getDay()];
            var date = curDate.getDate();
            var month = months[curDate.getMonth()];
            var year = curDate.getFullYear();
            var second = curDate.getSeconds();
            var minute = curDate.getMinutes();
            var hour = curDate.getHours();
            // var ampm = "AM";

            // UNCOMMENT THIS TO GET 12-HOUR FORMAT
            // if( hour > 12 ) 
            // {
               
            //    hour -= 12;  
            //    ampm = "PM";
            // }

            timestamp.textContent = 
               day + ", " + 
               date + " " +
               month + " " +
               year + ", " + 
               ("0" + hour).substr(-2) + ":" + 
               ("0" + minute).substr(-2) + ":" + 
               ("0" + second).substr(-2) + " "; 
               // ampm;
         }

         setInterval(time, 1000);
      </script>
   </body>
</html>