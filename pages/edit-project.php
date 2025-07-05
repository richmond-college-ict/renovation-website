<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <?php include('../components/verticalNavbar.php'); ?> 
  
  <div class="container " style="margin-left: 20vw">
    <h1>Edit Project</h1><br>

    <form class="form" action="../data/edit-project.php" method="POST" enctype="multipart/form-data">
    <?php 
    $id = $_GET['id'];
    include('../data/conn.php');
    $sql = "SELECT * FROM projects WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result)
    ?>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <label class="form-label">Project Name</label>
    <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    
    <label class="form-label">Description</label>
    <input class="form-control" type="text" name="description" value="<?php echo $row['description']; ?>" required><br>

    <label class="form-label">Estimated Cost</label>
    <input class="form-control" type="text" name="cost" value="<?php echo $row['cost']; ?>" required><br>

    <label class="form-label">Upload an Image</label>
    <input class="form-control" type="file" name="image"><br>

    <img src="../img/<?php echo $row['img']; ?>" width="auto" height="200px" value="<?php echo $row['img']; ?>"><br><br>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>
</body>
</html>