document.getElementById("encuesta").addEventListener("submit", function(event) {
  event.preventDefault(); // Detiene el envío predeterminado del formulario
  
  setTimeout(function() {
    document.getElementById("encuesta").submit(); // Envía el formulario después del retraso
  }, 3000);
});