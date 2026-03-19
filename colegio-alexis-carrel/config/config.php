<?php
// Detecta si es http o https
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Obtiene el dominio actual (localhost o el link de ngrok)
$domainName = $_SERVER['HTTP_HOST'];

// Une todo para crear la URL base dinámica
define('BASE_URL', $protocol . $domainName . '/colegio-alexis-carrel/');
?>