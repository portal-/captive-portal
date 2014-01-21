
<?php 
     require_once('includes/config.php');
     require_once('includes/database.php');
        

     session_start();
     $_SESSION['access']=NULL;
     global $msg;
     $msg='';
     

     if(!empty($_POST))
     {
         $otp=$_POST['otp'];
         $sql="SELECT * FROM users WHERE OTP='{$otp}' LIMIT 1"; 
         $result=$database->query($sql);
         $time_now=time();
         $query_num_rows=$database->num_rows($result);
        
           if($query_num_rows==0)
           {
            // header('Location:index.php'); 
            $msg= "<p style='color:red;'>you are not registered please register yourself</p><br>";

           }
           else if($query_num_rows==1)
           {
            
             
                     
              while($row=$database->fetch_assoc($result))
                {
                  $val=$row['otp_expiry'];
                  
                  if($time_now>$val)
                  {
                    $msg = "<p style='color:red;'>otp expired</p><br>";
                  }
                  else
                  {
                     $msg = "<p style='color:green'>you are successfull logged in</p><br>";
                  }

                 }    
             

           }
            
 

     }
    


?>



<!DOCTYPE html>
<html>
  <head>
    <title>Login form</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="content/themes/assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  </head>
  <body>
    <div class="loginForm">
      <center>
        <form class="form" method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?> >
          <input class="inputBox" name="otp" placeholder="please enter the PIN" type="text" required/><br/>
          <input class="button"  type="submit" value="submit"/> 
          <?php echo $msg ?>

        </form>
      </center>
    </div>
  </body>
</html>