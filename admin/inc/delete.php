<?php //connect database 
require '../../fun/db.php';
$table = $_GET['table'];
$id = $_GET['item_id'];
$field = $_GET['field'];

$sql = "DELETE FROM `$table` WHERE `$field`='$id' ";
$reslt = deleterow($sql);
    if($reslt)
{
    $data['message'] = "success";
}
else 
{
    $data['message'] = "error";
}



echo json_encode($data);





