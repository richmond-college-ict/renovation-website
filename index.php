<?php 
include('data/conn.php');

// Fetch projects from the database
$sql = "SELECT * FROM projects";
$result = mysqli_query($conn, $sql);
$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | RCG</title>
    
    <!-- Bootstrap & Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    
    
    
    <!-- SEO boost -->
<meta name="description" content="Support the Richmond College Renovation Program, an initiative to restore and enhance the school's infrastructure for future generations. Join us in preserving our legacy.">
<meta name="keywords" content="Richmond College, renovation, school development, infrastructure, education, Galle, Sri Lanka, school projects">
<meta name="author" content="Rusiru Thamara Kaluarachchi">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<!-- Open Graph Meta Tags (For Facebook & LinkedIn) -->
<meta property="og:title" content="Richmond College Renovation Program | Building a Better Future">
<meta property="og:description" content="Join the Richmond College Renovation Program to restore and improve our historic school buildings. Be part of the transformation!">
<meta property="og:url" content="https://projects.richmondcollege.lk">
<meta property="og:type" content="website">
<meta property="og:image" content="https://projects.richmondcollege.lk/img/ground.jpg">

<!-- Twitter Card Meta Tags (For Twitter/X) -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Richmond College Renovation Program">
<meta name="twitter:description" content="Help renovate and upgrade Richmond College for future generations. Join the initiative today!">
<meta name="twitter:image" content="https://projects.richmondcollege.lk/img/ground.jpg">
<meta name="twitter:site" content="@richmondcollege">

<!-- Canonical Tag (Avoid Duplicate Content Issues) -->
<link rel="canonical" href="https://projects.richmondcollege.lk">

</head>
<body>

    <!-- Hero Section -->
    <div class="hero bg"></div>

    <!-- Projects Section -->
    <div class="projects" id="projects">
        <?php include('components/navbar.php'); ?>

        <div class="container mt-4">
            <h1 class="text-center poppins-bold">Upcoming Projects</h1><br>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                <?php foreach ($projects as $project) { ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/<?php echo htmlspecialchars($project['img']); ?>" class="card-img-top" alt="Project Image">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder"><?php echo htmlspecialchars($project['name']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($project['description']); ?></p>
                                <p class="card-text"><strong>Estimated Cost:</strong> <?php echo htmlspecialchars($project['cost']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <p class="text-center">© 2025 Richmond College. All rights reserved.</p>
        </div>
    </footer>

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body, h1, h5, p {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }

        .bg {
            background-image: url('img/a.png');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .projects {
            background-color: #F8F9FA;
            min-height: 60vh;
        }

        .footer {
            background-color: #F8F9FA;
            min-height: 40px;
            padding: 2rem;
        }

        /* Responsive Background Changes */
        @media (max-width: 1500px) { .bg { background-image: url('img/b.png'); } }
        @media (max-width: 750px) { .bg { background-image: url('img/c.png'); } }
    </style>

</body>
</html>
