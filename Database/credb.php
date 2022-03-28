<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    
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

  $sql = "CREATE DATABASE login_page";
if($mysqli->query($sql) === True ){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->connect_error;
}


  $mysqli->close();
?>