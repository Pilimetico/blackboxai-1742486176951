<?php
// Instalador del script
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Instalador</title>
</head>
<body>
    <h1>Instalador del Script</h1>
    <form method="POST" action="">
        <label for="db_host">Host de la Base de Datos:</label>
        <input type="text" id="db_host" name="db_host" required>
        
        <label for="db_user">Usuario de la Base de Datos:</label>
        <input type="text" id="db_user" name="db_user" required>
        
        <label for="db_pass">Contraseña de la Base de Datos:</label>
        <input type="password" id="db_pass" name="db_pass" required>
        
        <label for="db_name">Nombre de la Base de Datos:</label>
        <input type="text" id="db_name" name="db_name" required>
        
        <label for="whatsapp_number">Número de WhatsApp:</label>
        <input type="text" id="whatsapp_number" name="whatsapp_number" required>
        
        <label for="block_option">Bloquear Números Temporalmente:</label>
        <input type="checkbox" id="block_option" name="block_option">
        
        <label for="block_minutes">Valor en Minutos:</label>
        <input type="number" id="block_minutes" name="block_minutes" min="0">
        
        <button type="submit">Instalar</button>
    </form>
</body>
</html>