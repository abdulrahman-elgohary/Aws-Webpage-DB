<?php
$db_host = 'db-rds.c7giwasc6mp0.us-west-1.rds.amazonaws.com';  // RDS endpoint
$db_user = 'admin';  // RDS master username
$db_password = '12345678';  // RDS password
$db_name = 'myappdb';  // Database name

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
