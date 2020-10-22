<?php 
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");
$date = date("Y-m-d");
$time = date("H:i:s");
echo json_encode(array('date'=>$date,'time'=>$time));
exit;
