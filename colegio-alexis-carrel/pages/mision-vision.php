<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/header.php'); ?>

<div class="bg-primary py-5 text-center text-white mb-5" style="background: linear-gradient(rgba(13, 27, 77, 0.9), rgba(13, 27, 77, 0.9)), url('<?php echo BASE_URL; ?>assets/img/hero-mision.jpg'); background-size: cover;">
    <h1 class="display-4 fw-bold">Nuestra Esencia</h1>
    <p class="lead">Lo que somos y hacia dónde vamos</p>
</div>

<div class="container pb-5">
    <div class="row g-4 align-items-stretch">
        
        <div class="col-12 col-md-6">
            <div class="card h-100 border-0 shadow-lg text-center p-4 hover-scale" style="border-top: 5px solid #0d1b4d !important;">
                <div class="card-body">
                    <div class="icon-box mb-4 mx-auto bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-bullseye fa-3x" style="color: #0d1b4d;"></i>
                    </div>
                    <h2 class="fw-bold mb-3 text-navy">Misión</h2>
                    <p class="text-muted lead">
                        "Formar seres humanos íntegros y felices, desarrollando sus capacidades intelectuales, físicas y emocionales a través de una educación humanista y científica, inspirada en la observación y el respeto por la vida, preparando líderes conscientes para el futuro."
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card h-100 border-0 shadow-lg text-center p-4 hover-scale" style="border-top: 5px solid #ffcc00 !important;">
                <div class="card-body">
                    <div class="icon-box mb-4 mx-auto bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-eye fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h2 class="fw-bold mb-3 text-navy">Visión</h2>
                    <p class="text-muted lead">
                        "Ser reconocidos como el colegio líder en León, Guanajuato, por nuestro modelo educativo que equilibra la excelencia académica con el bienestar emocional, siendo un referente de innovación pedagógica donde cada alumno descubre y potencia su mejor versión."
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .hover-scale { transition: transform 0.3s ease; }
    .hover-scale:hover { transform: translateY(-5px); }
</style>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/footer.php'); ?>