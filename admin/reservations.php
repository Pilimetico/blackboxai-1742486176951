<?php
session_start();
// Verificar si el usuario está autenticado
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Aquí se manejará la lógica para mostrar y gestionar reservas
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Gestión de Reservas</title>
</head>
<body>
    <header>
        <h1>Gestión de Reservas</h1>
    </header>
    <main>
        <h2>Reservas Existentes</h2>
        <!-- Aquí se listarán las reservas -->
    </main>
</body>
</html>