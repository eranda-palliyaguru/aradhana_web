<?php 
include("../connect.php");

$stmt = $db->query("SELECT * FROM fuel ");
while ($row = $stmt->fetch())
{ 
    $response[] = array($row['name']=>$row['value']);
}




//$response = array("invo"=>$tr_no,"state"=>"Online","id"=>$id,"date"=>$date_now,"noz"=>$noz);
$json_response = json_encode($response);
echo $json_response;

?>