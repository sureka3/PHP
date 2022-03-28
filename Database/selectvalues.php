<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body >


  <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'login_page';
   
    $mysqli = @new mysqli(
      $db_host,
      $db_user,
      $db_password,
      $db_db
    );
    
    if ($mysqli->connect_error) {
      echo 'Errno: '.$mysqli->connect_errno;
      echo '<br>';
      echo 'Error: '.$mysqli->connect_error;
      exit();
    }

    echo 'Success: A proper connection to MySQL was made.';
    echo '<br>';
    echo 'Host information: '.$mysqli->host_info;
    echo '<br>';
    echo 'Protocol version: '.$mysqli->protocol_version;

  $s ="joe";
  $sql = "SELECT * FROM users ";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    ?>
    <table class="center", style="background-color:#70F27A; width:500px">
    <tr>
      <th>Roll Number</th>
      <th>Name</th>
      <th>Password</th>
      <th>Email</th>
      <th>Semester</th>
      <th>Registration date</th>    
    </tr>
    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br>";
      ?>    
    <tr>
      <td><?php echo $row["roll_num"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["semester"]; ?></td>
      <td><?php echo $row["reg_date"]; ?></td>
    </tr>   

     <?php 
    }
    ?>
    </table>
    <?php
  } else {
    echo "0 results";
  }
    $mysqli->close();
  ?>


</body>
</html>
