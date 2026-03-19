<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/header.php'); ?>

<header class="py-5 bg-light border-bottom text-center" style="background: url('<?php echo BASE_URL; ?>assets/img/pattern.png'); background-size: cover;">
    <h1 class="display-4 fw-bold text-navy">Vida Estudiantil</h1>
    <p class="lead text-muted mt-2">Más que salones de clases, creamos momentos y recuerdos invaluables.</p>
</header>

<section class="py-5">
    <div class="container">
        <div class="masonry-gallery">
            <?php 
            // Lectura automática de TODAS las imágenes en la carpeta galeria
            $ruta_directorio = $_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/assets/img/galeria/';
            $ruta_publica = BASE_URL . 'assets/img/galeria/';
            
            $imagenes = glob($ruta_directorio . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);
            
            if ($imagenes) {
                foreach ($imagenes as $foto) {
                    $nombre_archivo = basename($foto);
                    echo '
                    <div class="gallery-item shadow-sm">
                        <img src="' . $ruta_publica . $nombre_archivo . '" 
                             alt="Vida Estudiantil Colegio Alexis Carrel"
                             data-bs-toggle="modal" 
                             data-bs-target="#galleryModal"
                             onclick="showImage(this.src)">
                    </div>';
                }
            } else {
                echo '<p class="text-center w-100 text-muted">No hay imágenes en la galería aún. Agrega fotos a assets/img/galeria/.</p>';
            }
            ?>
        </div>
    </div>
</section>

<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body text-center position-relative p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 shadow" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
                <img id="modalImage" src="" class="img-fluid rounded-4 shadow-lg w-100">
            </div>
        </div>
    </div>
</div>

<style>
    /* Efecto Masonry Responsivo */
    .masonry-gallery {
        column-count: 1; /* 1 columna en celulares */
        column-gap: 1.2rem;
    }
    
    @media (min-width: 576px) {
        .masonry-gallery { column-count: 2; } /* 2 columnas en tablets */
    }
    
    @media (min-width: 992px) {
        .masonry-gallery { column-count: 3; } /* 3 columnas en laptops */
    }
    
    @media (min-width: 1200px) {
        .masonry-gallery { column-count: 4; } /* 4 columnas en pantallas grandes */
    }

    .gallery-item {
        break-inside: avoid; /* Evita que una foto se parta a la mitad entre columnas */
        margin-bottom: 1.2rem;
        border-radius: 1rem;
        overflow: hidden;
        cursor: pointer;
        background-color: #f8f9fa; /* Color de fondo por si la imagen tarda en cargar */
    }

    .gallery-item img {
        width: 100%;
        height: auto; /* Permite que la imagen tome su altura natural */
        display: block;
        transition: transform 0.4s ease, filter 0.4s ease;
    }

    /* Efecto hover elegante al pasar el mouse */
    .gallery-item:hover img {
        transform: scale(1.05);
        filter: brightness(0.7);
    }
</style>

<script>
    // Función para cambiar la imagen del modal dinámicamente
    function showImage(src) {
        document.getElementById('modalImage').src = src;
    }
</script>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/colegio-alexis-carrel/includes/footer.php'); ?>