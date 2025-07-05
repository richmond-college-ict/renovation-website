<?php
include('conn.php'); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $description = $_POST['description'];
    $image = $_FILES['image'];

    // Fetch existing project data
    $query = "SELECT img FROM projects WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $existingImage = $row['img'];

    // Handle image upload
    if ($image['size'] > 0) {
        $targetDir = "../img/";
        $fileName = basename($image["name"]);
        $targetFilePath = $targetDir . $fileName;

        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Allow only specific file types
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileType, $allowedTypes)) {
            echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        // Move uploaded file to server
        if (move_uploaded_file($image["tmp_name"], $targetFilePath)) {
            // Delete old image if a new one is uploaded
            if (!empty($existingImage) && file_exists("../" . $existingImage)) {
                unlink("../" . $existingImage);
            }
        } else {
            echo "Error uploading the image.";
            exit;
        }
    } else {
        $targetFilePath = $existingImage; // Keep old image if no new upload
    }

    // Update query
    $updateSQL = "UPDATE projects SET name='$name', cost='$cost', description='$description', img='$fileName' WHERE id='$id'";
    if (mysqli_query($conn, $updateSQL)) {
        echo "Project updated successfully.";
        header("Location: ../pages/dashboard.php"); // Redirect after update
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
<?php
include('../data/conn.php'); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $image = $_FILES['image'];

    // Fetch existing project data
    $query = "SELECT img FROM projects WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $existingImage = $row['img'];

    // Handle image upload
    if ($image['size'] > 0) {
        $targetDir = "../uploads/";
        $fileName = basename($image["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Allow only specific file types
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileType, $allowedTypes)) {
            echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        // Move uploaded file to server
        if (move_uploaded_file($image["tmp_name"], $targetFilePath)) {
            // Delete old image if a new one is uploaded
            if (!empty($existingImage) && file_exists("../" . $existingImage)) {
                unlink("../" . $existingImage);
            }
        } else {
            echo "Error uploading the image.";
            exit;
        }
    } else {
        $targetFilePath = $existingImage; // Keep old image if no new upload
    }

    // Update query
    $updateSQL = "UPDATE projects SET name='$name', cost='$cost', description='$description', img='$targetFilePath' WHERE id='$id'";
    if (mysqli_query($conn, $updateSQL)) {
        header("Location: ../pages/dashboard.php"); // Redirect after update
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
