<?php
$db_host = 'your-rds-endpoint.rds.amazonaws.com';  // RDS endpoint
$db_user = 'admin';  // RDS master username
$db_password = 'yourpassword';  // RDS password
$db_name = 'myappdb';  // Database name

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
