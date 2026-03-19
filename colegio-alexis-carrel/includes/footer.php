<footer class="pt-5 pb-3 text-white" style="background-color: #002D80; border-top: 5px solid #FFD500;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo BASE_URL; ?>assets/img/logo.png" alt="Logo" width="50" class="me-2 bg-white rounded-circle p-1">
                    <h4 class="fw-bold mb-0 text-warning lh-1">Alexis Carrel<br><small class="text-white fs-6">Colegio</small></h4>
                </div>
                <p class="text-secondary small mb-4">Formando líderes con valores humanos, excelencia académica y educación inclusiva en el corazón de León, Gto. Nuestro compromiso es el futuro de su familia.</p>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/p/Colegio-Alexis-Carrel-100063787922365/?locale=es_LA" target="_blank" class="text-white fs-4 hover-gold" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/colegioalexiscarrel/" target="_blank" class="text-white fs-4 hover-gold" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/524773550621" target="_blank" class="text-white fs-4 hover-gold" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-1 col-md-4">
                <h5 class="fw-bold mb-4 text-white border-bottom border-warning d-inline-block pb-1">Nosotros</h5>
                <ul class="list-unstyled lh-lg small">
                    <li><a href="<?php echo BASE_URL; ?>pages/historia.php" class="text-secondary text-decoration-none hover-gold">Nuestra Historia</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/mision-vision.php" class="text-secondary text-decoration-none hover-gold">Misión y Visión</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/vida-estudiantil.php" class="text-secondary text-decoration-none hover-gold">Vida Estudiantil</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4">
                <h5 class="fw-bold mb-4 text-white border-bottom border-warning d-inline-block pb-1">Oferta Educativa</h5>
                <ul class="list-unstyled lh-lg small">
                    <li><a href="<?php echo BASE_URL; ?>pages/maternal.php" class="text-secondary text-decoration-none hover-gold">Maternal</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/preescolar.php" class="text-secondary text-decoration-none hover-gold">Preescolar</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/neurodivergencias.php" class="text-secondary text-decoration-none hover-gold">Neurodivergencias</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 text-secondary small">
                <h5 class="fw-bold mb-4 text-white border-bottom border-warning d-inline-block pb-1">Contacto</h5>
                <p class="mb-2"><i class="fas fa-map-marker-alt text-warning me-2"></i> Madero 847, Zona Centro, León, Gto.</p>
                <p class="mb-2"><i class="fas fa-phone text-warning me-2"></i> 477 355 0621</p>
                <p class="mb-4"><i class="fas fa-envelope text-warning me-2"></i> instituto.calzada@gmail.com</p>
                <a href="<?php echo BASE_URL; ?>pages/contacto.php" class="btn btn-outline-warning btn-sm rounded-pill px-3">Agendar Cita</a>
            </div>
        </div>
        <hr class="mt-5 mb-4 border-secondary">
        <div class="text-center text-secondary small">
            <p class="mb-0">© <?php echo date('Y'); ?> Colegio Alexis Carrel. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<style>
    /* Efecto hover y animaciones globales */
    .hover-gold { transition: color 0.3s ease; }
    .hover-gold:hover { color: #FFD500 !important; }
    .hover-scale { transition: transform 0.3s ease; }
    .hover-scale:hover { transform: translateY(-5px); }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>