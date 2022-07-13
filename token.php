<?php include("hed.php"); 
$id=$_GET['id'];
?>
        <div class="content-wrapper">
<br>
            <?php if($id=='44'){ ?> <center> <a href="health_token" ><button type="buttun" class="btn btn-lg btn-info">Apply Health Sector TOKEN</button></a> </center><?php } ?>
            <!-- /.content-header -->
<br><br>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->


                     <div class="card">
                              <div class="card-header">
                <h3 class="card-title">TOKEN Data</h3> 
                <div class="row">
                <div class="col-2">
                    <form  action="token" method="get" >
 <select type="text" class="form-control" name="id">
     <option value="0"></option>
 <?php $stmt = $db->query("SELECT * FROM qusue");
       while ($row = $stmt->fetch())
    {  $idc=$row['id']; $name=$row['name'];
    echo '<option value="'.$idc.'">'.$name.'</option>'; }?>
 <select>
  </div><div class="col-2">

<button type="submit" class="btn btn-info">Filter</button>

</form>
</div><h3><?php $stmt = $db->query("SELECT * FROM qusue WHERE id='$id'");
       while ($row = $stmt->fetch())
    { echo $row['name'];} ?> TOKEN LIST</h3> </div>
               
              
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>TOKEN ID</th>
                    <th>Vehicle NO</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $stmt = $db->query("SELECT * FROM token  WHERE q='$id' AND action='1'");
                            while ($row = $stmt->fetch())
                            { ?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                  </tr>
<?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>TOKEN ID</th>
                    <th>Vehicle NO</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
                  </tfoot>
                </table>
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