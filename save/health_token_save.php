<?php
include("../connect.php");
$old_id="cr";
$vehicle=$_POST['vehicle'];

$stmt = $db->query("SELECT id FROM token  WHERE vehicle_no='$vehicle' AND action='25' ");
while ($row = $stmt->fetch())
{ $old_id=$row['id']; }

$stmt = $db->query("SELECT id FROM token  WHERE vehicle_no='$vehicle' AND action='1' ");
while ($row = $stmt->fetch())
{ $old_id=$row['id']; }

$token_id=$old_id;
if($old_id=="cr"){

$name=$_POST['name'];
$nic=$_POST['nic'];
$phone=$_POST['phone'];
$vehicle=$_POST['vehicle'];
$fuel=0;
$type=$_POST['type'];
$email=$_POST['email'];

$stmt = $db->query("SELECT * FROM vehicle_type  WHERE id='$type' ");
                            while ($row = $stmt->fetch())
                            { $type_name=$row['name']; }

$stmt = $db->query("SELECT count(id) FROM token  WHERE q='4' ");
                            while ($row = $stmt->fetch())
                            { $token_no=$row['count(id)']+1; }

$date=date('Y-m-d');
$time=date('H.i.s');

$q='4';

$sql = "INSERT INTO token (name, phone, vehicle_no, nic, date, time, type_id, type, fuel, q, token_no, action,email) VALUES ('$name', '$phone', '$vehicle', '$nic', '$date', '$time', '$type', '$type_name', '$fuel', '$q','$token_no', '25','$email')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}

$stmt = $db->query("SELECT id FROM token  WHERE vehicle_no='$vehicle' AND action='25' ");
while ($row = $stmt->fetch())
{ $token_id=$row['id']; }


$file_name = $_FILES['doc']['name'];
$file_type = $_FILES['doc']['type'];
$file_size = $_FILES['doc']['size'];
$temp_name = $_FILES['doc']['tmp_name'];

$temp = explode(".", $file_name);
$file_name = "health_doc_".date('ymdhis') . '.' . end($temp);

$upload_to = '../doc/';

// checking file size
if ($file_size > 5000000000) {
  $errors[] = 'File size should be less than 500kb.';
}

if (!$file_size) {
  $errors[] = 'File size should be less than 500kb.';
}


if (empty($errors)) {
  $file_uploaded = move_uploaded_file($temp_name, $upload_to .$file_name);

  $sql = "UPDATE token
          SET doc_parth=?
  		WHERE id=?";
  $q = $db->prepare($sql);
  $q->execute(array($file_name,$token_id));

}

}
header("location:../health_token?id=$token_id");
 ?>
