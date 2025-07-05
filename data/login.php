<?php 
include('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT password FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $dbpswd = $result->fetch_assoc();
    if ($password == $dbpswd['password']) {
       session_start();
       $_SESSION['username'] = $username;
       $_SESSION['state'] = TRUE;
       header('Location: ../pages/dashboard.php');
    } else {
        echo "Invalid Password";
    }
} else {
    echo "Username not found";
}

$stmt->close();
$conn->close();
?>
