<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/header.php'); ?>

<header class="py-5 bg-light border-bottom text-center" style="background: url('<?php echo BASE_URL; ?>assets/img/pattern.png'); background-size: cover;">
    <h1 class="display-4 fw-bold" style="color: #003AA6;">Nuestra Historia</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase fw-semibold">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-decoration-none text-muted">Inicio</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Nosotros</li>
        </ol>
    </nav>
</header>

<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-start g-5">
            
            <div class="col-lg-5 mb-4 mb-lg-0 text-center sticky-lg-top" style="top: 120px; z-index: 1;">
                <div class="position-relative d-inline-block mb-3">
                    <img src="<?php echo BASE_URL; ?>assets/img/alexis-carrel-bio.jpg" class="img-fluid rounded-4 shadow-lg object-fit-cover" style="max-height: 450px;" alt="Retrato del Dr. Alexis Carrel">
                    
                    <div class="position-absolute bottom-0 end-0 bg-warning text-dark px-3 py-2 rounded-start-pill shadow fw-bold fs-6 transform-translate-y">
                        <i class="fas fa-award me-2"></i> Premio Nobel 1912
                    </div>
                </div>

                <div class="p-3 bg-light rounded-3 text-start border-start border-4 shadow-sm mx-auto" style="border-color: #003AA6 !important; max-width: 90%;">
                    <p class="text-muted mb-2" style="font-size: 0.85rem; line-height: 1.5; text-align: justify;">
                        <i class="fas fa-camera text-secondary me-1"></i> 
                        <strong>Alexis Carrel</strong>, pionero de las primeras técnicas de anastomosis de vasos sanguíneos y trasplante de órganos sólidos. Reimpreso con permiso de la Biblioteca del Congreso, División de Grabados y Fotografías, Número de reproducción: LC-DIG-ggbain-34418.
                    </p>
                    <a href="https://www.google.com/search?vsrid=CICWnYf0teXxyAEQAhgBIiQyZjA2NGQ2NC1iOWQxLTRjNjctOWU1NC05ZTY3MThiMWU5ZjYyBiICcncoCzic8d_H--eSAw&vsint=CAIqDAoCCAcSAggKGAEgATojChYNAAAAPxUAAAA_HQAAgD8lAACAPzABELgBGJECJQAAgD8&udm=26&lns_mode=un&source=lns.web.gisivli&vsdim=184,273&gsessionid=6CGurv10ibTwPvDuqKwy6QZm_zE-DFRwNeesuM9eVkRxBGZScvmgfQ&lsessionid=eTJxRTz6Mc54T8787UEkPevX51M6vSfmb29YlhApOXiZbtHVmN2BUg&lns_surface=19&authuser=0&lns_vfs=e&qsubts=1771586918097&biw=1912&bih=956&ved=0CBgQh6cGahgKEwjQgaen-eeSAxUAAAAAHQAAAAAQkQE&tbnid=4NG3bDcb7jWPkM&ictx=2#sv=CAMSVhoyKhBlLTlpUzNuM1Y5ckY2Wm1NMg45aVMzbjNWOXJGNlptTToOc21wamZiUDFKMFJFcE0gBCocCgZtb3NhaWMSEGUtOWlTM24zVjlyRjZabU0YADABGAcgno-VwgUwAkoIEAIYAiACKAI" target="_blank" class="badge text-white text-decoration-none p-2" style="background-color: #003AA6;">
                        Origen de la imagen <i class="fas fa-external-link-alt ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <h2 class="fw-bold mb-4" style="color: #003AA6;">El legado que nos inspira</h2>
                <p class="text-muted mb-4 fs-5">Conoce la historia del científico, médico y pensador que revolucionó la medicina y cuya visión humanista cimentó las bases de nuestra filosofía educativa.</p>
                
                <div class="d-grid gap-3">
                    
                    <div>
                        <button class="btn btn-navy-custom w-100 text-start p-3 fw-bold fs-5 rounded-3 shadow-sm d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#seccionUno" aria-expanded="false">
                            <span><i class="fas fa-microscope text-warning me-3 fs-4"></i> Pionero de la Medicina Moderna</span>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </button>
                        <div class="collapse show" id="seccionUno">
                            <div class="card card-body border-0 shadow-sm mt-2 rounded-3 bg-light text-secondary lh-lg" style="text-align: justify;">
                                Nacido en Francia en 1873, <strong>Alexis Carrel</strong> demostró desde joven una destreza extraordinaria para la ciencia. Su mayor logro técnico llegó al desarrollar métodos innovadores para suturar vasos sanguíneos (anastomosis). Este avance monumental permitió no solo salvar extremidades que antes habrían sido amputadas, sino que sentó las bases absolutas para la cirugía cardiovascular y los trasplantes de órganos sólidos modernos. Por esta inmensa contribución, recibió el <strong>Premio Nobel de Fisiología o Medicina en 1912</strong>.
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-navy-custom w-100 text-start p-3 fw-bold fs-5 rounded-3 shadow-sm d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seccionDos" aria-expanded="false">
                            <span><i class="fas fa-briefcase-medical text-warning me-3 fs-4"></i> Salvando vidas en la Gran Guerra</span>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </button>
                        <div class="collapse" id="seccionDos">
                            <div class="card card-body border-0 shadow-sm mt-2 rounded-3 bg-light text-secondary lh-lg" style="text-align: justify;">
                                Durante la Primera Guerra Mundial, el Dr. Carrel regresó a Francia para servir en los hospitales de campaña. Al ver la enorme cantidad de soldados que perdían la vida por infecciones, colaboró con el químico inglés Henry Dakin. Juntos crearon el <strong>método Carrel-Dakin</strong>, un sistema de irrigación de heridas con una solución antiséptica que revolucionó el tratamiento de traumas de guerra, salvando miles de vidas y extremidades antes del descubrimiento masivo de la penicilina.
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-navy-custom w-100 text-start p-3 fw-bold fs-5 rounded-3 shadow-sm d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seccionTres" aria-expanded="false">
                            <span><i class="fas fa-book-open text-warning me-3 fs-4"></i> Su Filosofía Humanista</span>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </button>
                        <div class="collapse" id="seccionTres">
                            <div class="card card-body border-0 shadow-sm mt-2 rounded-3 bg-light text-secondary lh-lg" style="text-align: justify;">
                                Más allá de su rigor en el laboratorio, Carrel se preocupó profundamente por el desarrollo del espíritu y la mente. En su obra maestra <em>"La incógnita del hombre" (1935)</em>, argumentó que la sociedad moderna se enfocaba demasiado en lo material y descuidaba la esencia del ser humano. Planteó que para alcanzar nuestro verdadero potencial, debíamos ser educados de manera <strong>integral</strong>, cultivando simultáneamente nuestra salud física, nuestra inteligencia intelectual y nuestra disciplina moral y espiritual.
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-navy-custom w-100 text-start p-3 fw-bold fs-5 rounded-3 shadow-sm d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seccionCuatro" aria-expanded="false">
                            <span><i class="fas fa-seedling text-warning me-3 fs-4"></i> Nuestra Misión Educativa</span>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </button>
                        <div class="collapse" id="seccionCuatro">
                            <div class="card card-body border-0 shadow-sm mt-2 rounded-3 bg-light text-secondary lh-lg" style="text-align: justify;">
                                <p class="mb-3">Es esta visión holística y humanista la que da nombre y propósito a nuestra institución. En el <strong>Colegio Alexis Carrel</strong>, no vemos a los alumnos solo como receptores de conocimiento académico, sino como seres humanos completos en pleno desarrollo.</p>
                                <p class="mb-0">Honrando su legado, nuestra metodología promueve la curiosidad científica, la empatía, el bienestar socioemocional y la excelencia académica, asegurando que cada niño y niña construya las herramientas necesarias para esculpir su propio futuro con resiliencia y valores.</p>
                            </div>
                        </div>
                    </div>

                </div> <div class="p-4 mt-5 bg-light border-start border-5 border-warning rounded shadow-sm hover-scale-slight">
                    <i class="fas fa-quote-left fa-2x text-muted mb-3 opacity-25"></i>
                    <p class="fst-italic fs-5 text-dark mb-0" style="text-align: justify;">
                        "Para progresar de nuevo, el ser humano debe rehacerse. Y no puede rehacerse sin esfuerzo, porque es a la vez el mármol y el escultor."
                    </p>
                    <footer class="blockquote-footer mt-3 text-end fs-6 fw-bold">Dr. Alexis Carrel</footer>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Efecto de la etiqueta de Premio Nobel */
    .transform-translate-y {
        transform: translateY(15px);
    }

    /* Diseño del Botón Azul Personalizado */
    .btn-navy-custom {
        background-color: #003AA6 !important;
        color: white !important;
        border: 2px solid #003AA6 !important;
        transition: all 0.3s ease;
    }

    .btn-navy-custom:hover {
        background-color: #002D80 !important;
        border-color: #FFD500 !important;
        transform: translateX(5px);
    }

    /* Animación del Chevron */
    .btn-navy-custom .toggle-icon {
        transition: transform 0.3s ease;
    }
    
    .btn-navy-custom:not(.collapsed) .toggle-icon {
        transform: rotate(180deg);
        color: #FFD500;
    }

    .hover-scale-slight { transition: transform 0.3s ease; }
    .hover-scale-slight:hover { transform: scale(1.02); }
</style>

<script>
    // Acordeón automático: Cierra los demás botones cuando abres uno
    document.addEventListener('DOMContentLoaded', function () {
        const collapses = document.querySelectorAll('.collapse');
        collapses.forEach(function (collapse) {
            collapse.addEventListener('show.bs.collapse', function () {
                collapses.forEach(function (otherCollapse) {
                    if (otherCollapse !== collapse && otherCollapse.classList.contains('show')) {
                        let bsCollapse = new bootstrap.Collapse(otherCollapse);
                        bsCollapse.hide();
                    }
                });
            });
        });
    });
</script>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/footer.php'); ?>