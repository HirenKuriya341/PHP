<!-- Global variable links -->
<?php $main_link = "/Hiren_Kuriya"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo $main_link ?>/Images/Radixweb.png">
    <title>Radixweb Training</title>
    <link rel="stylesheet" href="<?php echo $main_link ?>/CSS/style.css">
    
    <link rel="stylesheet" href="<?php echo $main_link ?>/CSS/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $main_link ?>/CSS/font-awesome/css/font-awesome.min.css">

    <!-- Script links -->
    <script src="<?php echo $main_link ?>/JS/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $main_link ?>/JS/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient sticky-top" style="opacity: 0.8;">
        <div class="container">
            <a class="navbar-brand mx-5" href="<?php echo $main_link ?>/index.php">
                <img src="<?php echo $main_link ?>/Images/Radixweb.png" alt="radix" class="w-25">
                <h4 class="d-inline align-middle"><span class="text-primary fw-bolder">Radix</span><span class="text-info fw-bolder">Training</span></h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav px-5 ms-auto h5">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="<?php echo $main_link ?>/HTML-training/html.php">HTML</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="<?php echo $main_link ?>/CSS-training/css.php">CSS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="<?php echo $main_link ?>/Bootstrap-training/bootstrap.php">Bootstrap</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="<?php echo $main_link ?>/JavaScript-training/javascript.php">JavaScript</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="<?php echo $main_link ?>/jQuery-training/jquery.php">jQuery</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark disabled" href="<?php echo $main_link ?>/jQuery-training/jquery.php">PHP</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" target="_blank" href="<?php echo $main_link ?>/Bootstrap-training/Day 6/Radixweb/index.php">Mini Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>