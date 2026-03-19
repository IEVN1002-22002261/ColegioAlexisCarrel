<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/header.php'); ?>

<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light" style="background: linear-gradient(rgba(0, 58, 166, 0.6), rgba(0, 58, 166, 0.6)), url('<?php echo BASE_URL; ?>assets/img/banner-maternal.jpg') center/cover;">
    <div class="col-md-8 p-lg-5 mx-auto my-5 text-white">
        <h1 class="display-4 fw-bold" style="color: #FFD500;">Maternal</h1>
        <p class="lead fw-normal">Un inicio lleno de amor, cuidado y estimulación para los más pequeños del hogar.</p>
        <a class="btn btn-warning btn-lg fw-bold mt-3 rounded-pill px-4" href="<?php echo BASE_URL; ?>pages/contacto.php">Conoce más</a>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <h2 class="fw-bold mb-4" style="color: #003AA6;">Creciendo en un entorno seguro</h2>
            <p class="lead text-muted">
                Sabemos que los primeros años son fundamentales. En nuestra área de Maternal, ofrecemos un espacio cálido y seguro donde tus hijos recibirán atención personalizada, enfocándonos en la estimulación temprana y el desarrollo psicomotriz.
            </p>
            
            <div class="mt-5">
                <h3 class="fw-bold mb-4">Lo que ofrecemos</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-warning">
                            <i class="fas fa-baby text-warning mb-2 fs-4"></i>
                            <h5 class="fw-bold">Cuidado Afectivo</h5>
                            <p class="small text-muted mb-0">Personal altamente capacitado y amoroso para atender todas sus necesidades.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-info">
                            <i class="fas fa-shapes text-info mb-2 fs-4"></i>
                            <h5 class="fw-bold">Estimulación Temprana</h5>
                            <p class="small text-muted mb-0">Actividades diseñadas para despertar sus sentidos y curiosidad natural.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-success">
                            <i class="fas fa-walking text-success mb-2 fs-4"></i>
                            <h5 class="fw-bold">Desarrollo Psicomotriz</h5>
                            <p class="small text-muted mb-0">Ejercicios y juegos para fortalecer su coordinación y primeros pasos.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded shadow-sm h-100 bg-white border-start border-4 border-primary">
                            <i class="fas fa-shield-alt text-primary mb-2 fs-4"></i>
                            <h5 class="fw-bold">Entorno Seguro</h5>
                            <p class="small text-muted mb-0">Instalaciones adaptadas específicamente para prevenir accidentes y promover la exploración.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="alert mt-5 d-flex align-items-center border-0 shadow-sm" role="alert" style="background-color: #f8f9fa;">
                <i class="fas fa-clock fa-3x me-4" style="color: #003AA6;"></i>
                <div>
                    <h5 class="fw-bold mb-1" style="color: #003AA6;">Tranquilidad para Papá y Mamá</h5>
                    <p class="mb-0 text-muted"><strong>Horario regular:</strong> Lunes a Viernes de 8:00 AM a 2:00 PM.</p>
                    <hr class="my-2">
                    <p class="mb-0 text-success fw-bold"><i class="fas fa-check-circle"></i> Opción de cuidado extendido hasta las 5:30 PM.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-3 bg-light sticky-top" style="top: 100px;">
                <h4 class="fw-bold border-bottom pb-2" style="color: #003AA6;">Niveles Educativos</h4>
                <div class="list-group mt-3 list-group-flush">
                    <a href="<?php echo BASE_URL; ?>pages/maternal.php" class="list-group-item list-group-item-action active fw-bold d-flex justify-content-between align-items-center rounded" style="background-color: #003AA6; border-color: #003AA6; color: white;">
                        Maternal <i class="fas fa-chevron-right" style="color: #FFD500;"></i>
                    </a>
                    <a href="<?php echo BASE_URL; ?>pages/preescolar.php" class="list-group-item list-group-item-action bg-transparent d-flex justify-content-between align-items-center fw-semibold">
                        Preescolar <i class="fas fa-chevron-right text-muted small"></i>
                    </a>
                    <a href="<?php echo BASE_URL; ?>pages/neurodivergencias.php" class="list-group-item list-group-item-action bg-transparent d-flex justify-content-between align-items-center fw-semibold">
                        Neurodivergencias <i class="fas fa-chevron-right text-muted small"></i>
                    </a>
                </div>
                
                <div class="card border-0 shadow mt-4 rounded-4" style="background-color: #FFD500;">
                    <div class="card-body text-center p-4">
                        <i class="fab fa-whatsapp fa-3x mb-3" style="color: #003AA6;"></i>
                        <h5 class="fw-bold" style="color: #003AA6;">Hablemos</h5>
                        <p class="small" style="color: #002D80;">Comunícate con nosotros para conocer detalles sobre costos y disponibilidad.</p>
                        <a href="https://wa.me/524773550621" class="btn w-100 rounded-pill shadow-sm fw-bold" style="background-color: #003AA6; color: white;">Contactar Asesor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/footer.php'); ?>