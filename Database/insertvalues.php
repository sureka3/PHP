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



$sql = "INSERT INTO users 
VALUES ('joe', 'joeismyx@gmail.com' ,'joe29');";

$sql .= "INSERT INTO users 
VALUES ('gaby', 'gabywent@gmail.com', 'gaby11');";


if($mysqli->multi_query($sql) === True ){
    echo "New record created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->connect_error;
}

  $mysqli->close();
?>