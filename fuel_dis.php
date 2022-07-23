                    <div class="row">
<?php 
$stmt = $db->query("SELECT * FROM fuel ");
while ($row = $stmt->fetch()){
    $up_date=$row['up_date'];
    $value=$row['value'];
    $cap=$row['cap'];
    $fuel=$row['id'];
    $q=$row['q'];
    
    $pr=$value/$cap *100;
    
    if($value < 550){ $mas="<span style='color:red ;' class='info-box-number'>Stock not sufficient</span>";
    $line_color="danger";
    }else{ $mas="<span style='color:green ;' class='info-box-number'>Stock Available</span>"; 
        $line_color="success";
    }
    
    $update=$row['date']." ".$row['time'];
    $now=date('Y-m-d H:i:s');
    $to_time = strtotime($update);
    $from_time = strtotime($now);

    $diff=abs($to_time - $from_time);
     $diffm=abs($to_time - $from_time);
    if($diffm < 60){ $diffl= '<span class="badge badge-info">'.$diff .'s ago</span>';}
    if($diffm > 60){ $diffl= '<span class="badge badge-success">'. round($diff/60,0) .'m ago</span>';
      if($diffm > 3600){ $diffl= '<span class="badge badge-warning">'. round($diff/ 3600,0) .'h ago</span>';
        if($diffm > 86400){ $diffl= '<span class="badge badge-danger">'. round($diff/86400,0) .'d ago</span>';}
    }
    }

    
    
    $diffl= '<span class="badge badge-success">online</span>';
if($fuel == '4' or $fuel=='3'){ $f1='4'; $f2='3';}
if($fuel == '1' or $fuel=='2'){ $f1='1'; $f2='2';}
if($fuel == '5' or $fuel=='5'){ $f1='5'; $f2='5';}
$stmt1 = $db->query("SELECT count(id) FROM token  WHERE action='1' AND q='$q' ");
                            while ($row1 = $stmt1->fetch())
                            { $q=$row1['count(id)']; }
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
                                        <h5><span class="badge badge-danger">Active Token: <?php echo $q; ?></span></h5>
                                    </div>
                                    <h6>Rs. <?php echo $row['price']; ?></h6>
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