<?php 
require_once('includes/config.php');
require_once('includes/database.php');

//fetch user info 
 
 $guestName=$_POST['guestName'];
 $roomNo=$_POST['roomNo'];
 $checkOutDate=$_POST['checkOutDate'];
 $checkOutTime=$_POST['checkOutTime'];
 $checkInDate=date('Y-m-d');
 $checkInTime=time('H:i:s');
 // $checkOutTime=strtotime$checkOutTime);
 $otp=$guestName.strval($roomNo);
 


$sql="INSERT INTO users(guest_name,room_no,check_in_date,check_in_time,check_out_date,check_out_time,otp) VALUES ('{$guestName}','{$roomNo}','{$checkInDate}','{$checkInTime}','{$checkOutDate}','{$checkOutTime}','{$otp}')";
echo $sql;
$result=$database->query($sql);
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Sign up</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="content/themes/assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  </head>
  <body>
    <center>
      <div>
        <h1>Create User</h1>
      </div>
      <?php 
         require_once("navbar.php");
      ?>
      <div class="loginForm createUserForm">
         OTP Gnerated : <?php echo $otp ;?>
      </div>
    </center>    
  </body>
</html>