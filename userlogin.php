<?php 
require_once('includes/config.php');
require_once('includes/database.php');




   // if(isset($database))
   // {
   // 	echo "true";
   // }
   // else
   // {
   // 	echo "false";
   // }

$checkindate=date('Y-m-d');



$sql="INSERT INTO users(id,guest_name, room_no,check_in_date,check_out_date) VALUES (4,'ANKITA','53','{$checkindate}','{$checkindate}')";

$result=$database->query($sql);



?>