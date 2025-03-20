<?php
include 'inc/config.php';
include 'inc/db.php';

// Conectar a la base de datos
$conn = connect();

// Obtener los sorteos disponibles
$sql = "SELECT * FROM raffles";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js" defer></script>
    <title>Rifas Disponibles</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la Página de Rifas</h1>
        <nav>
            <a href="admin/login.php">Iniciar Sesión (Admin)</a>
        </nav>
    </header>
    <main>
        <h2>Sorteos Disponibles</h2>
        <div class="raffle-list">
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="card">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        <p>Número de boletos a vender: <?php echo $row['total_tickets']; ?></p>
                        <button class="luckyMachineButton">Máquina de la Suerte</button>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No hay sorteos disponibles en este momento.</p>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
<?php
$conn->close();
?>