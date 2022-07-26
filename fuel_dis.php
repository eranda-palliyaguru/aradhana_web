                    <div class="row">
<?php 
include("connect.php");
date_default_timezone_set("Asia/Colombo");
$stmt = $db->query("SELECT * FROM fuel ");
while ($row = $stmt->fetch()){
    $up_date=$row['up_date'];
    $value=$row['value'];
    $cap=$row['cap'];
    $fuel=$row['id'];
    $q=$row['q'];
    $id_name=$row['id_name'];


    $date=date('Y-m-d');
    $stmt1 = $db->query("SELECT count(id) FROM sales WHERE type='$id_name' and date='$date'");
    while ($row1 = $stmt1->fetch()){ $tot=$row1['count(id)']; }

    $stmt1 = $db->query("SELECT count(id) FROM sales WHERE type='$id_name' AND date='$date' AND volume > 7");
    while ($row1 = $stmt1->fetch()){ $car=$row1['count(id)']; }

    $stmt1 = $db->query("SELECT count(id) FROM sales WHERE type='$id_name' AND date='$date' AND volume < '4.6'");
    while ($row1 = $stmt1->fetch()){ $bike=$row1['count(id)']; }

    $stmt1 = $db->query("SELECT count(id) FROM sales WHERE type='$id_name' AND date='$date' AND volume < 7 AND volume > 4");
    while ($row1 = $stmt1->fetch()){ $tuk=$row1['count(id)']; }

    $pr=$value/$cap *100;
    
    if($value < 550){ $mas="<span style='color:red ;' class='info-box-number'>Stock not sufficient</span>";
    $line_color="danger";
    }else{ $mas="<span style='color:green ;' class='info-box-number'>Stock Available</span>"; 
        $line_color="success";
    }


    
    
    $diffl= '<span class="badge badge-success">online</span>';


?>
                        
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">

                                <img style="width:150px;" src="img/<?php echo $row['img']; ?>" alt="">

                                <div class="info-box-content">
                                    <span class="info-box-text"><?php echo $row['name']; ?></span>
                                    <span class="info-box-number"><?php echo $row['value']; ?> L</span>
                                    <div class="progress-group">
                                        <div class="progress progress-lg">
                                            <div class="progress-bar bg-<?php echo $line_color; ?>" style="width: <?php echo $pr; ?>%"></div>
                                        </div>
                                        <?php echo $mas; ?>
                                        
                                    </div>
                                    <h6>Rs. <?php echo $row['price']; ?></h6><div class="row">
                                    <?php 
                                    if($tot > 0){
                                    
                                    echo '<span class="badge badge-secondary"><img style="width:60px;" src="img/car.png" alt="">'.$car.'</span>';
                                    echo ' <span class="badge badge-secondary"><img style="width:32px;" src="img/tuk.png" alt="">'.$tuk.'</span>';
                                    echo ' <span class="badge badge-secondary"><img style="width:35px;" src="img/Bike.png" alt="">'.$bike.'</span>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="pull-right box-tools">
                                <?php echo $diffl; ?> 
                            </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <?php } ?>
                        <!-- /.col -->
                        

                    </div>
                    <!-- /.row -->