<?php include("hed.php"); ?>
        <div class="content-wrapper">
            <div class="content-header">
               
         <div class="row">
             <?php $id=$_GET['id'];
$stmt = $db->query("SELECT * FROM token  WHERE id='$id'");
while ($row = $stmt->fetch())
{ $sms_action=$row['sms_action']; }
    if($sms_action=="0"){ 
?>
<div class="col-md-4">
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-ban"></i>දැනුම්දීම​යි</h5>
කරුනාකර sms පනිවිඩයක් දෙනතුරු පෝලිමට එකතුවීමෙන් වලකින්න
ස්තූතී!

</div></div>

<div class="col-md-4">
<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i>දැනුම්දීම​යි
</h5>
සිකුරාදා දිනයේදී සෞඛ්‍යය කාර්ය මණ්ඩලයට පමනක් ඉන්දන ලබාදෙන බව කරුනාවෙන් සලකන්න
</div></div>

<?php } if($sms_action=="1"){  ?>
<div class="col-md-4">
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-ban"></i>දැනුම්දීම​යි</h5>
ඔබ පැමිනි පසු අංක පිලිවලට පෝලිමට එකතු වීමට සහ ඔබේ වාරය පැමිනෙන තෙක් රැදීසිටීමට කාරුනික වන්න
</div></div>

<div class="col-md-4">
<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i>දැනුම්දීම​යි
</h5>
ඔබට පැමිනෙන ලෙස sms පනිවිඩය ලැබී විනාඩි 30ක් තුල නොපැමිනියහොත් ඔබට ඉන්දන නොලැබීම සම්බන්දයෙන් අප වගකීමක් නොදරන බව කරුනාවෙන් සලකන්න
</div></div>
<?php } if($sms_action=="1"){ ?>

<?php } ?>
</div>
               
            </div>
            <!-- /.content-header -->


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->


                     <div class="card">
              <div class="card-header">
                <h3 class="card-title">TOKEN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                
                 <div class="row">
<?php if(!$_GET['id']){ ?>                 
                      

<?php }else{ ?>
<div class="col-md-4">
<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Your TOKEN </h3>
</div>
<?php $id=$_GET['id'];
$stmt = $db->query("SELECT * FROM token  WHERE id='$id'");
while ($row = $stmt->fetch())
{ $vehicle=$row['vehicle_no'];
$token=$row['token_no'];
$action=$row['action'];
$q=$row['q'];
}
?>
<div class="card-body">
<div class="col-12">
 <?php if($action=="25"){ echo' <span class="badge badge-warning">pending</span>';}
if($action=="1"){echo' <span class="badge badge-success">Active</span>';}
if($action=="2"){echo' <span class="badge badge-danger">Closed</span>';}
?> 
<h3>
    <div class="col-12">
    <?php echo $vehicle ?></div>
<div class="col-12">
<label class="form-check-label">TOKEN NO:</label><a style="font-size:27px;" class="text-red"> <?php echo $token; ?></a> 
</div>
    </h3>


</div>

</div>

</div>
</div>
<?php } ?>
                        <!-- Left col -->
                        <div class="col-md-8">
                            <!-- MAP & BOX PANE -->
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">TOKEN LIST</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>TOKEN ID</th>
                    <th>Vehicle NO</th>
                    <th>TYPE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $stmt = $db->query("SELECT * FROM token  WHERE q='$q' AND token_no < $token ORDER BY id DESC limit 6");
                            while ($row = $stmt->fetch())
                            { $action=$row['action'];?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    
                    <td><?php if($action=="25"){ echo' <span class="badge badge-warning">pending</span>';}
if($action=="1"){echo' <span class="badge badge-success">Active</span>';}
if($action=="2"){echo' <span class="badge badge-danger">Closed</span>';}
?></td>
                  </tr>
<?php } ?>


    <?php $stmt = $db->query("SELECT * FROM token  WHERE q='$q' AND token_no = $token ORDER BY id ASC limit 2");
                            while ($row = $stmt->fetch())
                            { $action=$row['action'];?>
                  <tr style="background-color:#81CBFE;">
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                   
                    <td><?php if($action=="25"){ echo' <span class="badge badge-warning">pending</span>';}
if($action=="1"){echo' <span class="badge badge-success">Active</span>';}
if($action=="2"){echo' <span class="badge badge-danger">Closed</span>';}
?></td>
                  </tr>
<?php } ?>




    <?php $stmt = $db->query("SELECT * FROM token  WHERE q='$q' AND token_no > $token ORDER BY id ASC limit 6");
                            while ($row = $stmt->fetch())
                            { $action=$row['action'];?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    
                    <td><?php if($action=="25"){ echo' <span class="badge badge-warning">pending</span>';}
if($action=="1"){echo' <span class="badge badge-success">Active</span>';}
if($action=="2"){echo' <span class="badge badge-danger">Closed</span>';}
?></td>
                  </tr>
<?php } ?>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                    <a href="token?id=<?php echo $q; ?>" class="btn btn-sm btn-secondary float-right">View All
                                        TOKEN</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>


                </div>
                <!--/. container-fluid -->
            </section>
            
            
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
         <strong>Powered by <a style="font-size:25px; align-items: top;"" href="https://cloudarmsoft.com"><img  style="width:140px;  align-items: top;" src="bitmap.png" ></a></strong>
           
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    
    
    
<script>
$("form").submit(function() {
    $(this).find('input[type="submit"]').prop("disabled", true);
});

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>