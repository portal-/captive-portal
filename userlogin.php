<?php 
require_once('includes/config.php');
require_once('includes/database.php');

//fetch user info 
 
 $guestName=$_POST['guestName'];
 $roomNo=$_POST['roomNo'];
 $checkOutDate=$_POST['checkOutDate'];
 $checkOutTime=$_POST['checkOutTime'];
 $checkOutDate=date('Y-m-d',strtotime($checkOutDate));    //Converts date to 'yyyy-mm-dd' acceptable to mysql
 $checkOutTime=date('H:i:s',strtotime($checkOutTime));    //converts time to HH:mm:ss
 $otp=$guestName.strval($roomNo);
  
 $otp_expiry=time()+(2*60);
 
 $sql="INSERT INTO users(guest_name,room_no,check_in_date,check_in_time,check_out_date,check_out_time,otp,otp_expiry) VALUES ('{$guestName}','{$roomNo}',now(),now(),'{$checkOutDate}','{$checkOutTime}','{$otp}','{$otp_expiry}')";


 
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