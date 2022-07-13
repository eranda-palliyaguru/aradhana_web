<?php include("hed.php"); ?>
<?php 
$deff="2d" 
?>

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
                    
<?php include("fuel_dis.php"); ?>

                    
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-6">
                            <!-- MAP & BOX PANE -->
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">PRTROL TOKEN LIST</h3>
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
                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $stmt = $db->query("SELECT * FROM token  WHERE q='1' AND action='1' limit 20");
                            while ($row = $stmt->fetch())
                            { ?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                  </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                    <a href="token?id=1" class="btn btn-sm btn-secondary float-right">View All
                                        TOKEN</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        
                                                <div class="col-md-6">
                            <!-- MAP & BOX PANE -->
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">DIESEL TOKEN LIST</h3>
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
                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $stmt = $db->query("SELECT * FROM token  WHERE q='2' AND action='1' limit 20");
                            while ($row = $stmt->fetch())
                            { ?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                  </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                    <a href="token?id=2" class="btn btn-sm btn-secondary float-right">View All
                                        TOKEN</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <!-- MAP & BOX PANE -->
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">KEROSENE TOKEN LIST</h3>
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
                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $stmt = $db->query("SELECT * FROM token  WHERE q='3' AND action='1' limit 20");
                            while ($row = $stmt->fetch())
                            { ?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                  </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                    <a href="token?id=3" class="btn btn-sm btn-secondary float-right">View All
                                        TOKEN</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        
                        <div class="col-md-6">
                            <!-- MAP & BOX PANE -->
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">Health Sector TOKEN</h3>
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
                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $stmt = $db->query("SELECT * FROM token  WHERE q='4' AND action='1' limit 20");
                            while ($row = $stmt->fetch())
                            { ?>
                  <tr>
                    <td><?php echo $row['token_no']; ?></td>
                    <td><?php echo $row['vehicle_no']; ?></td>
                    
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
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

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>