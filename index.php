<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="public/img/kb.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">

    <script src="https://kit.fontawesome.com/f3d86bd153.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="public/js/formQuery.js"></script>
    <script src="public/js/scrollScript.js"></script>
    <script src="public/js/animationScript.js"></script>

    <title>Kevin Bertrand</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navigation" data-bs-offset="100" class="scrollspy" tabindex="0">
    <nav class="navbar sticky-top navbar-expand-xxl justify-content-md-center" id="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="first-link" class="nav-link active" href="#presentation" aria-current="page">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experiences">Expériences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formations">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects-section">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        // PRESENTATION
        require("pages/about.php");

        // SKILLS
        require("pages/skills.php");

        //EXPERIENCES
        require("pages/experiences.php");

        // EDUCATION
        require("pages/education.php");

        // TRAINING
        require("pages/training.php");

        // PROJECTS
        require("pages/projects.php");

        // CONTACT
        require("pages/contact.php")
    ?>
    <footer class="text-center">
        <a href="#" class="back-to-top-link" id="go-top-button"><i class="bi bi-chevron-up"></i></a>
        <h5>© 2022 - Kevin Bertrand</h5>
    </footer>    
</body>
</html>
