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
    <h1>New Project</h1><br>

    <form class="form" action="../data/new-project.php" method="post" enctype="multipart/form-data">
        <label class="form-label" for="name">Project Name:</label>
        <input class="form-control" type="text" name="name" required>
        <br>
        <label class="form-label" for="cost">Project Description:</label>
        <input  class="form-control" type="text" name="description" required>
        <br>
        <label class="form-label" for="cost">Project Cost:</label>
        <input  class="form-control" type="text" name="cost" required>
        <br>
        <label  class="form-label" for="img">Upload Image:</label>
        <input  class="form-control" type="file" name="img" accept="image/*" required>
        <br>
        <button class="btn btn-primary" type="submit">Create Project</button>
    </form>
  </div>
</body>
</html>