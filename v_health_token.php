<?php include("hed.php"); ?>
        <div class="content-wrapper">
            <div class="content-header">
               
                                
               
            </div>
            <!-- /.content-header -->


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->


                     <div class="card">
              <div class="card-header">
                <h3 class="card-title">Health Sector TOKEN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                
                 <div class="row">
<?php if(!$_GET['id']){ ?>                 
                      <div class="col-md-4">
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">NEW TOKEN </h3>
</div>
<div class="card-body">
     <form  action="save/health_token_save.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-8">
    <div class="form-group">
    <label>Your Name</label>
<input type="text" name="name" class="form-control" placeholder="name" required autocomplete="off">
</div></div>
<?php if($id=='5'){ echo "<input name='vehicle' type='hidden' >"; }else{  ?>
<div class="col-4">
    <div class="form-group">
    <label>Vehicle NO.</label>
<input type="text" name="vehicle"  class="form-control" placeholder="AAA-1111" required autocomplete="off">
</div></div> <?php } ?>
</div>

<div class="row">
<div class="col-6">
    <div class="form-group">
    <label>NIC NO (ID Number)</label>
<input type="text" name="nic"  class="form-control" placeholder="ID number" required autocomplete="off">
</div></div>
<div class="col-6">
    <div class="form-group">
    <label>Phone NO.</label>
<input type="number" name="phone"  class="form-control" placeholder="94771234567" required autocomplete="off">
</div></div>
</div>
<div class="col-12">
    <div class="form-group">
    <label>E-mail.</label>
<input type="email" name="email"  class="form-control" placeholder="name@ex.com"  autocomplete="off">
</div></div>
<div class="row">
    <div class="col-12">
    <div class="form-group">
    <label>Document  <p class="text-info" >මේ තුලින් ඔබ ආයතනය ලබාදුන් අවසරපත ඇතුලත් කරන්න</p></label>
<input type="file" name="doc"  class="form-control"  required autocomplete="off">
</div></div>
    
                                                <div class="col-lg-4">
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="radio" value="1" name="type" checked>
<label class="form-check-label"><img style="width:100px;" src="img/car.png" alt=""></label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="type" value="2" >
<label class="form-check-label"><img style="width:100px;" src="img/veel.png" alt=""></label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="type" value="3" >
<label class="form-check-label"><img style="width:100px;" src="img/Bike.png" alt=""></label>
</div>
</div>

</div>


</div>

<input type="submit" value="Submit" id="btnSearch" class="btn btn-danger">
</form>
</div>

</div>
</div>
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
}
?>
<div class="card-body">

<h3><?php echo $vehicle ?></h3>
<div class="row">
<div class="col-6">
<label class="form-check-label">TOKEN NO: </label><a style="font-size:27px;" class="text-red"><?php echo $token; ?></a> 
</div>
<div class="col-6">
<label class="form-check-label">Status:</label> <?php if($action=="25"){ echo' <span class="badge badge-warning">pending</span>';}
if($action=="1"){echo' <span class="badge badge-success">Active</span>';}
if($action=="2"){echo' <span class="badge badge-danger">Active</span>';}
?> 
</div>
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
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>TOKEN ID</th>
                    <th>Vehicle NO</th>
                   
                    <th>Date</th>
                    <th>TYPE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $stmt = $db->query("SELECT * FROM token  WHERE q='4' limit 30");
                            while ($row = $stmt->fetch())
                            { ?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    <td><?php echo $row['date']; ?></td>
                    <td><a href="id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">View</button></a></td>
                  </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                    <a href="token?id=4" class="btn btn-sm btn-secondary float-right">View All
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "pdf", "print"]
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