<?php
session_start();
// Verificar si el usuario está autenticado
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Aquí se manejará la lógica para mostrar, crear, editar y borrar sorteos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Gestión de Sorteos</title>
</head>
<body>
    <header>
        <h1>Gestión de Sorteos</h1>
    </header>
    <main>
        <h2>Sorteos Existentes</h2>
        <!-- Aquí se listarán los sorteos -->
        <button><a href="create_raffle.php">Crear Nuevo Sorteo</a></button>
    </main>
</body>
</html>