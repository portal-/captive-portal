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
        <form class="form" method="POST" action="authenticate.php">
          <input class="inputBox" placeholder="enter guest name" type="text" required/><br/>
          <input class="inputBox" placeholder="enter room number" type="text" required/><br/>
          <label>Enter check-in time </label>
          <input class="inputBox" type="time" required/><br/>
          <label>Enter check-out time </label>
          <input class="inputBox" type="time" required/><br/>
          <button>generate OTP</button><br/>
          <input class="button"  type="submit"/> 
        </form>
      </div>
    </center>    
  </body>
</html>