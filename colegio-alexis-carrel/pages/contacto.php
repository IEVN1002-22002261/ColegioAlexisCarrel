<?php include '../includes/header.php'; ?>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-5">
            <h2 class="fw-bold text-navy mb-4">Ponte en contacto</h2>
            <p class="text-muted mb-5">Estamos listos para recibirte y mostrarte por qué somos la mejor opción para tus hijos.</p>
            
            <div class="d-flex mb-4">
                <div class="bg-warning p-3 rounded-circle me-3 text-white h-100"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h5 class="mb-1">Ubicación</h5>
                    <p> Madero 847, Zona Centro, León, Gto.</p>
                </div>
            </div>
            <div class="d-flex mb-4">
                <div class="bg-primary p-3 rounded-circle me-3 text-white h-100"><i class="fas fa-phone"></i></div>
                <div>
                    <h5 class="mb-1">Teléfono</h5>
                    <p>477 355 0621</p>
                </div>
            </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.234!2d-101.68!3d21.12!" width="100%" height="250" class="rounded shadow-sm border-0" allowfullscreen=""></iframe>
        </div>

        <div class="col-md-7">
            <div class="card border-0 shadow-lg p-4 rounded-4">
                <form action="/config/send_mail.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Nombre del Padre/Tutor</label>
                            <input type="text" class="form-control bg-light" placeholder="Ej. Juan Pérez" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">WhatsApp de Contacto</label>
                            <input type="tel" class="form-control bg-light" placeholder="477..." required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Nivel o Programa de Interés</label>
                            <select class="form-select bg-light">
                                <option>Maternal</option>
                                <option>Preescolar</option>
                                <option>Programa de Neurodivergencias</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Mensaje o dudas</label>
                            <textarea class="form-control bg-light" rows="4"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark w-100 py-3 fw-bold rounded-pill shadow">ENVIAR SOLICITUD DE INFORMES</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>