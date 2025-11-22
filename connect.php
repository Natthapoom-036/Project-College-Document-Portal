<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "Project_College";

// ข้อมูล
$connect = mysqli_connect($hostname, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
