<?php
session_start();
// Verificar si el usuario está autenticado
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Dashboard principal
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <header>
        <h1>Panel de Administración</h1>
        <nav>
            <ul>
                <li><a href="raffles.php">Sorteos</a></li>
                <li><a href="reservations.php">Reservas</a></li>
                <li><a href="settings.php">Configuración</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Bienvenido al Panel de Administración</h2>
        <!-- Estadísticas y resumen -->
    </main>
</body>
</html>