<?php 
$id = $_GET['id'];
include('conn.php');

$sql = "DELETE * FROM `users` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);
header('../pages/dashboard.php')
?>