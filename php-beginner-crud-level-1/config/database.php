<?php
// used to connect to the database
$host = "mysql57"; //"localhost"; //"127.0.0.1";
$db_name = "php_beginner_crud_level_1";
$username = "root";
$password = "";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    echo "Connected to database"; // check for connection
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>