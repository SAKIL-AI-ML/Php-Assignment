<?php
$current_date_time=array("current_date_time"=>date("y-m-d H:i:s"));
header("context-type:application/json");
echo json_encode($current_date_time);
?>
