<?php 
require('../data/verify.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include('../components/verticalNavbar.php'); ?>
    <br>

    <div class="container " style="margin-left: 20vw">
        <h3>Upcoming Projects</h3>
        <p>from [2025-02-28] to [2025-12-31]</p>
        <br>
        <a href="new-project.php">
        <button class="btn btn-primary">New Project</button></a>
        <table class="table">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>cost</th>
                <th>Actions</th>
            </tr>
            <?php 
                include('../data/conn.php');
                $sql = "SELECT * FROM projects";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){ 
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['cost']; ?></td>
                
                <td>

                    <a href="edit-project.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning">Edit</butto></a> 
                    <a href="../data/Delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
