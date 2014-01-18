<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

  </head>
  <body>
    <center>

      
      <div>
        <h1>Admin Panel</h1>
      </div>
      <?php 
        require_once("navbar.php");
      ?>
      <div class="admin-table-div">
        <table class="user-log">
          <thead>
            <tr>
              <th>Sr no.</th>
              <th>Guest name</th>
              <th>Room no.</th>
              <th>check-in date</th>
              <th>check-out date</th>
              <th>OTP</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Kunal Kerkar</td>
              <td>4</td>
              <td>22-05-2014</td>
              <td>26-05-2014</td>
              <td>Kunal4</td>
            </tr>
          </tbody>
        </table>
      </div>
    </center>
  </body>
</html>