<?php include("hed.php"); ?>
<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> HOME</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->

            <div class="row">
                <?php $stmt = $db->query("SELECT * FROM massage  WHERE  action='100' ");
                            while ($row = $stmt->fetch())
                            { echo '<div class="col-md-4">
<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i>'.$row["hed"].'
</h5>'.$row["msg"].'</div></div>'; }?>
            </div>

            <div id="fuel_dis">
                <?php include("fuel_dis.php"); ?>
            </div>


            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
               

               


                
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->
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
    <strong>Powered by <a style="font-size:25px; align-items: top;"" href=" https://cloudarmsoft.com"><img
                style="width:140px;  align-items: top;" src="bitmap.png"></a></strong>

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

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    setInterval(function() {
        $("#fuel_dis").load('fuel_dis.php')
    }, 20000);
});
</script>

</html>