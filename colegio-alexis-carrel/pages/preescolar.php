<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/header.php'); ?>

<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light" style="background: linear-gradient(rgba(0, 58, 166, 0.6), rgba(0, 58, 166, 0.6)), url('<?php echo BASE_URL; ?>assets/img/banner-preescolar.jpg') center/cover;">
    <div class="col-md-8 p-lg-5 mx-auto my-5 text-white">
        <h1 class="display-4 fw-bold" style="color: #FFD500;">Preescolar</h1>
        <p class="lead fw-normal">Descubriendo el mundo a través del juego, la creatividad y los primeros pasos académicos.</p>
        <a class="btn btn-warning btn-lg fw-bold mt-3 rounded-pill px-4" href="<?php echo BASE_URL; ?>pages/contacto.php">Inscribir a mi hijo(a)</a>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <h2 class="fw-bold mb-4" style="color: #003AA6;">La base del éxito futuro</h2>
            <p class="lead text-muted">
                En nuestro Preescolar fomentamos el desarrollo integral de los niños. A través de metodologías activas y lúdicas, sembramos el amor por el aprendizaje, reforzando la independencia, el trabajo en equipo y los valores que los acompañarán toda la vida.
            </p>
            
            <div class="mt-5">
                <h3 class="fw-bold mb-4">Pilares de nuestro Preescolar</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-danger">
                            <i class="fas fa-font text-danger mb-2 fs-4"></i>
                            <h5 class="fw-bold">Lectoescritura</h5>
                            <p class="small text-muted mb-0">Iniciación amigable y a su propio ritmo para el reconocimiento de letras y palabras.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-primary">
                            <i class="fas fa-calculator text-primary mb-2 fs-4"></i>
                            <h5 class="fw-bold">Lógico-Matemático</h5>
                            <p class="small text-muted mb-0">Aprendizaje de números y conceptos matemáticos mediante material concreto.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-success">
                            <i class="fas fa-palette text-success mb-2 fs-4"></i>
                            <h5 class="fw-bold">Expresión Artística</h5>
                            <p class="small text-muted mb-0">Fomento de la creatividad mediante artes plásticas y música.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-info">
                            <i class="fas fa-globe-americas text-info mb-2 fs-4"></i>
                            <h5 class="fw-bold">Inglés y Valores</h5>
                            <p class="small text-muted mb-0">Inmersión diaria en el idioma inglés y educación socioemocional continua.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="alert mt-5 d-flex align-items-center border-0 shadow-sm" role="alert" style="background-color: #f8f9fa;">
                <i class="fas fa-clock fa-3x me-4" style="color: #003AA6;"></i>
                <div>
                    <h5 class="fw-bold mb-1" style="color: #003AA6;">Horarios Flexibles</h5>
                    <p class="mb-0 text-muted"><strong>Horario regular:</strong> Lunes a Viernes de 8:00 AM a 2:00 PM.</p>
                    <p class="mb-0 text-muted"><strong>Club de Tareas:</strong> 2:30 PM a 3:30 PM.</p>
                    <hr class="my-2">
                    <p class="mb-0 text-success fw-bold"><i class="fas fa-check-circle"></i> Horario extendido disponible hasta las 5:30 PM.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-3 bg-light sticky-top" style="top: 100px;">
                <h4 class="fw-bold border-bottom pb-2" style="color: #003AA6;">Niveles Educativos</h4>
                <div class="list-group mt-3 list-group-flush">
                    <a href="<?php echo BASE_URL; ?>pages/maternal.php" class="list-group-item list-group-item-action bg-transparent d-flex justify-content-between align-items-center fw-semibold">
                        Maternal <i class="fas fa-chevron-right text-muted small"></i>
                    </a>
                    <a href="<?php echo BASE_URL; ?>pages/preescolar.php" class="list-group-item list-group-item-action active fw-bold d-flex justify-content-between align-items-center rounded" style="background-color: #003AA6; border-color: #003AA6; color: white;">
                        Preescolar <i class="fas fa-chevron-right" style="color: #FFD500;"></i>
                    </a>
                    <a href="<?php echo BASE_URL; ?>pages/neurodivergencias.php" class="list-group-item list-group-item-action bg-transparent d-flex justify-content-between align-items-center fw-semibold">
                        Neurodivergencias <i class="fas fa-chevron-right text-muted small"></i>
                    </a>
                </div>
                
                <div class="card border-0 shadow mt-4 rounded-4" style="background-color: #FFD500;">
                    <div class="card-body text-center p-4">
                        <i class="fab fa-whatsapp fa-3x mb-3" style="color: #003AA6;"></i>
                        <h5 class="fw-bold" style="color: #003AA6;">¿Agendamos una visita?</h5>
                        <p class="small" style="color: #002D80;">Ven a conocer nuestras instalaciones y descubre la magia de nuestro preescolar.</p>
                        <a href="https://wa.me/524773550621" class="btn w-100 rounded-pill shadow-sm fw-bold" style="background-color: #003AA6; color: white;">Contactar por WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/footer.php'); ?>