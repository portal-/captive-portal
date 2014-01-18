<?php 
require_once('includes/config.php');
require_once('includes/database.php');
?>


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
      <nav class="navbar">
        <a href="">Create guest</a>
        <a href="">delete guest</a>
        <a href="">Logout</a>
      </nav>
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
             

            <?php 
          

                  $sql="SELECT * FROM  users";
                  $result=$database->query($sql);
                  while($row=$database->fetch_assoc($result))
                  {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['guest_name']."</td>";
                    echo "<td>".$row['room_no']."</td>";
                    echo "<td>".$row['check_in_date']."</td>";
                    echo "<td>".$row['check_in_date']."</td>";
                    echo "</tr>";
                  }

               

            ?>

          </tbody>
        </table>
      </div>
    </center>
  </body>
</html>