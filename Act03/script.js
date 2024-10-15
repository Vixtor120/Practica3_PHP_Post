// Validación del formulario del lado del cliente
document.getElementById('moodForm').addEventListener('submit', function(event) {
    const selectedMood = document.querySelector("input[name='labelanimo']:checked");
    if (!selectedMood) {
        alert('Por favor, selecciona un estado de ánimo.');
        event.preventDefault();
    }
});

// Mostrar el div infoSong si hay una recomendación
document.addEventListener('DOMContentLoaded', function() {
    const infoSong = document.getElementById('infoSong');
    if (infoSong) {
        infoSong.style.display = 'block';
    }
});