<?php
include('../data/conn.php'); // Include database connection

$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include('../components/verticalNavbar.php') ?>
<div class="container mt-5">
    <h2 class="mb-4">Messages</h2>
    
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td>
                        <!-- Button to Open Modal -->
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#messageModal<?php echo $row['id']; ?>">
                            View
                        </button>
                    </td>
                </tr>

                <!-- Bootstrap Modal for Viewing Message -->
                <div class="modal fade" id="messageModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel<?php echo $row['id']; ?>"><?php echo $row['subject']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
                                <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                                <p><strong>Message:</strong></p>
                                <p><?php echo nl2br($row['message']); ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
