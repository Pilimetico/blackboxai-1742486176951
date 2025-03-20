<?php
// Funciones auxiliares

// Función para enviar mensajes a WhatsApp
function sendWhatsAppMessage($message) {
    $whatsappNumber = WHATSAPP_NUMBER;
    // Aquí se implementaría la lógica para enviar el mensaje
}

// Función para generar boletos aleatorios
function generateRandomTickets($total, $count) {
    $tickets = [];
    while (count($tickets) < $count) {
        $ticket = rand(1, $total);
        if (!in_array($ticket, $tickets)) {
            $tickets[] = $ticket;
        }
    }
    return $tickets;
}

// Función para verificar disponibilidad de un boleto
function checkTicketAvailability($ticketNumber) {
    $conn = connect();
    $stmt = $conn->prepare("SELECT reserved FROM tickets WHERE ticket_number = ?");
    $stmt->bind_param("i", $ticketNumber);
    $stmt->execute();
    $result = $stmt->get_result();
    $available = true;

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $available = $row['reserved'] == 0; // 0 significa disponible
    }

    $stmt->close();
    $conn->close();
    return $available;
}
?>