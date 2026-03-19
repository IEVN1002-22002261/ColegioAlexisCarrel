<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/header.php'); ?>

<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Maternal"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Preescolar"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Neurodivergencias"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" style="background: linear-gradient(rgba(0, 58, 166, 0.6), rgba(0, 58, 166, 0.6)), url('<?php echo BASE_URL; ?>assets/img/maternal.jpeg') center/cover; height: 80vh;">
            <div class="container h-100 d-flex align-items-center text-white">
                <div class="col-md-8 col-lg-6">
                    <h1 class="display-3 fw-bold text-white text-uppercase" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Maternal</h1>
                    <p class="lead fs-4 mb-4">Un inicio lleno de amor, cuidado y estimulación para los más pequeños del hogar.</p>
                    <a href="#niveles" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow hover-scale">Conocer más</a>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background: linear-gradient(rgba(0, 58, 166, 0.6), rgba(0, 58, 166, 0.6)), url('<?php echo BASE_URL; ?>assets/img/preescolar.jpeg') center/cover; height: 80vh;">
            <div class="container h-100 d-flex align-items-center text-white">
                <div class="col-md-8 col-lg-6">
                    <h1 class="display-3 fw-bold text-white text-uppercase" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Preescolar</h1>
                    <p class="lead fs-4 mb-4">Descubriendo el mundo a través del juego, la creatividad y los primeros pasos académicos.</p>
                    <a href="#niveles" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow hover-scale">Conocer más</a>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background: linear-gradient(rgba(0, 58, 166, 0.6), rgba(0, 58, 166, 0.6)), url('<?php echo BASE_URL; ?>assets/img/neurodivergencias.jpeg') center/cover; height: 80vh;">
            <div class="container h-100 d-flex align-items-center text-white">
                <div class="col-md-8 col-lg-6">
                    <h1 class="display-3 fw-bold text-white text-uppercase" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Neurodivergencias</h1>
                    <p class="lead fs-4 mb-4">Educación inclusiva, empática y adaptada a las necesidades de cada mente brillante.</p>
                    <a href="#niveles" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow hover-scale">Conocer más</a>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 3rem; height: 3rem;"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="width: 3rem; height: 3rem;"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<div class="bg-dark text-white py-3 shadow">
    <div class="container d-flex justify-content-between flex-wrap">
        <span><i class="fas fa-phone" style="color: #FFD500;"></i> 477 355 0621</span>
        <span><i class="fas fa-envelope" style="color: #FFD500;"></i> instituto.calzada@gmail.com</span>
        <span><i class="fas fa-map-marker-alt" style="color: #FFD500;"></i> Madero 847, Zona Centro, León, Gto.</span>
    </div>
</div>

<section id="niveles" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 display-5 text-navy">NUESTRA OFERTA EDUCATIVA</h2>
        <div class="row g-4 justify-content-center">
            <?php
            $niveles = [
                ['Maternal', '1-2 años', 'maternal.jpeg', 'Cuidado cariñoso y estimulación temprana para los más pequeños.', 'maternal.php'],
                ['Preescolar', '3-5 años', 'preescolar.jpeg', 'Desarrollo integral, habilidades sociales y bases académicas sólidas.', 'preescolar.php'],
                ['Neurodivergencias', 'Atención Especializada', 'neurodivergencias.jpeg', 'Entorno inclusivo, adaptado y guiado por especialistas para un desarrollo óptimo.', 'neurodivergencias.php']
            ];
            foreach ($niveles as $n): ?>
            <div class="col-md-4">
                <div class="card border-0 shadow h-100 nivel-card" style="border-bottom: 4px solid #FFD500 !important;">
                    <img src="<?php echo BASE_URL; ?>assets/img/<?php echo $n[2]; ?>" class="card-img-top object-fit-cover" height="200" alt="<?php echo $n[0]; ?>">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title fw-bold text-navy"><?php echo $n[0]; ?></h4>
                        <div class="mb-3"><span class="badge bg-warning text-dark"><?php echo $n[1]; ?></span></div>
                        <p class="text-muted flex-grow-1"><?php echo $n[3]; ?></p>
                        <a href="<?php echo BASE_URL; ?>pages/<?php echo $n[4]; ?>" class="btn btn-outline-dark mt-auto rounded-pill">Ver programa</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-navy display-5">¿Por qué elegirnos?</h2>
            <p class="text-muted fs-5">Más que educación, ofrecemos una formación integral a través de nuestros servicios exclusivos.</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-primary card"><i class="fas fa-language fa-2x text-primary mb-3"></i><h5 class="fw-bold text-navy">Inglés Diario</h5><p class="small text-muted mb-0">Aprendizaje constante del idioma.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-success card"><i class="fas fa-leaf fa-2x text-success mb-3"></i><h5 class="fw-bold text-navy">Ecología</h5><p class="small text-muted mb-0">Conciencia y cuidado ambiental.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-info card"><i class="fas fa-heart fa-2x text-info mb-3"></i><h5 class="fw-bold text-navy">Ed. Socioemocional</h5><p class="small text-muted mb-0">Inteligencia emocional y valores.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-danger card"><i class="fas fa-music fa-2x text-danger mb-3"></i><h5 class="fw-bold text-navy">Artes y Música</h5><p class="small text-muted mb-0">Expresión creativa diaria.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-dark card"><i class="fas fa-fist-raised fa-2x text-dark mb-3"></i><h5 class="fw-bold text-navy">Tae Kwon Do</h5><p class="small text-muted mb-0">Disciplina y deporte.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-warning card"><i class="fas fa-book-reader fa-2x text-warning mb-3"></i><h5 class="fw-bold text-navy">Club de Tareas</h5><p class="small text-muted mb-1">Apoyo de <strong>2:30 PM a 3:30 PM</strong>.</p><span class="badge bg-primary w-100 mt-2">Extendido hasta 5:30 PM</span></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-secondary card"><i class="fas fa-utensils fa-2x text-secondary mb-3"></i><h5 class="fw-bold text-navy">Comedor</h5><p class="small text-muted mb-0">Alimentación balanceada (Opcional).</p></div></div>
            <div class="col-6 col-md-4 col-lg-3"><div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-success card"><i class="fas fa-piggy-bank fa-2x text-success mb-3"></i><h5 class="fw-bold text-navy">Accesibilidad</h5><p class="small text-muted mb-0">Horarios y costos accesibles.</p></div></div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #003AA6;">
    
    <div class="container text-center text-white mb-4">
        <h2 class="display-5 fw-bold">Descubre nuestro día a día</h2>
        <p class="lead">Un vistazo a la alegría y el aprendizaje en el Colegio Alexis Carrel.</p>
    </div>

    <div class="container position-relative" style="height: 550px; overflow: hidden;">
        
        <div class="row g-3">
            <?php
            $ruta_directorio = $_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/assets/img/galeria/';
            $ruta_publica = BASE_URL . 'assets/img/galeria/';
            
            $imagenes = glob($ruta_directorio . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);
            
            if ($imagenes) {
                $fotos_preview = array_slice($imagenes, 0, 8); 
                
                foreach ($fotos_preview as $foto) {
                    $nombre_archivo = basename($foto);
                    echo '
                    <div class="col-6 col-md-3">
                        <img src="' . $ruta_publica . $nombre_archivo . '" 
                             class="img-fluid rounded-3 shadow-sm preview-img" 
                             alt="Vida Estudiantil" loading="lazy">
                    </div>';
                }
            } else {
                echo '<p class="text-white text-center w-100 mt-4">Agrega fotos a la carpeta assets/img/galeria/ para verlas aquí.</p>';
            }
            ?>
        </div>

        <div class="position-absolute w-100 d-flex justify-content-center align-items-end pb-4" 
             style="bottom: 0; left: 0; height: 350px; background: linear-gradient(to bottom, rgba(0, 58, 166, 0) 0%, rgba(0, 58, 166, 0.85) 65%, rgba(0, 58, 166, 1) 100%); z-index: 10; pointer-events: none;">
            
            <a href="<?php echo BASE_URL; ?>pages/vida-estudiantil.php" 
               class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow-lg" 
               style="font-size: 1.2rem; pointer-events: auto; transition: transform 0.3s ease;"
               onmouseover="this.style.transform='scale(1.05) translateY(-3px)'" 
               onmouseout="this.style.transform='scale(1) translateY(0)'">
                <i class="fas fa-images me-2" style="color: #003AA6;"></i> 
                <span style="color: #003AA6;">Ver Galería Completa</span>
            </a>
            
        </div>
        
    </div>
</section>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/footer.php'); ?>