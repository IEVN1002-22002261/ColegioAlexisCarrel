<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/config/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Alexis Carrel | Excelencia Educativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #003AA6; border-bottom: 4px solid #FFD500;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>index.php">
            <img src="<?php echo BASE_URL; ?>assets/img/logo.png" alt="Logo" width="60" class="me-2">
            <div class="lh-1">
                <span class="fw-bold d-block mb-0" style="letter-spacing: 1px;">COLEGIO ALEXIS CARREL</span>
                <small class="text-warning fw-bold" style="font-size: 0.7rem;">INSTITUTO EDUCATIVO</small>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Acerca de</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>pages/historia.php">Nuestra Historia</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>pages/mision-vision.php">Misión y Visión</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>pages/vida-estudiantil.php">Vida Estudiantil</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Oferta Educativa</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>pages/maternal.php">Maternal</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>pages/preescolar.php">Preescolar</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>pages/neurodivergencias.php">Neurodivergencias</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>pages/contacto.php">Contacto</a></li>
                <li class="nav-item ms-lg-3">
                    <a href="https://wa.me/524773550621" class="btn btn-warning fw-bold rounded-pill px-4 shadow-sm">¡Inscríbete ya!</a>
                </li>
            </ul>
        </div>
    </div>
</nav>