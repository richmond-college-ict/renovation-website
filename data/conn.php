<?php 
$host = "localhost";
$username = "";
$password = "";
$db_name = "";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>