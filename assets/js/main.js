document.addEventListener('DOMContentLoaded', function() {
    // Lógica para la "Máquina de la suerte"
    const luckyMachineButtons = document.querySelectorAll('.luckyMachineButton');
    
    luckyMachineButtons.forEach(button => {
        button.addEventListener('click', function() {
            const totalTickets = 50; // Cambiar esto por el total de boletos del sorteo correspondiente
            const count = prompt("¿Cuántos boletos aleatorios quieres generar? (1, 5, 10, 20, 50)");
            const tickets = generateRandomTickets(totalTickets, parseInt(count));
            alert("Boletos generados: " + tickets.join(", "));
            // Aquí se puede implementar la lógica para guardar los boletos generados
        });
    });

    // Lógica para buscar boletos disponibles
    const searchInput = document.getElementById('searchTicket');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const ticketNumber = searchInput.value;
            // Aquí se implementará la lógica AJAX para verificar disponibilidad
        });
    }
});

// Función para generar boletos aleatorios
function generateRandomTickets(total, count) {
    const tickets = [];
    while (tickets.length < count) {
        const ticket = Math.floor(Math.random() * total) + 1;
        if (!tickets.includes(ticket)) {
            tickets.push(ticket);
        }
    }
    return tickets;
}