<?php
session_start();
// Verificar si el usuario está autenticado
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Aquí se manejará la lógica para gestionar configuraciones
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Configuración</title>
</head>
<body>
    <header>
        <h1>Configuración</h1>
    </header>
    <main>
        <h2>Modificar Configuraciones</h2>
        <!-- Formulario para cambiar logo, número de WhatsApp y opciones de bloqueo -->
    </main>
</body>
</html>