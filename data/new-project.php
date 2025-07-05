<?php 
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];

    $target_dir = "../img/"; 
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($_FILES["img"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO projects (name, cost, img, description) VALUES ('$name', '$cost', '$target_file','$description')";
            mysqli_query($conn, $sql);
            header("Location: ../pages/dashboard.php"); // Redirect after update

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


