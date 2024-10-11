
// Efecto de cambio de color en los botones al hacer clic
const buttons = document.querySelectorAll('button');
buttons.forEach(button => {
  button.addEventListener('click', function () {
    button.style.backgroundColor = '#e74c3c'; // Cambia el color del botón
    setTimeout(() => {
      button.style.backgroundColor = '#3498db'; // Vuelve al color original después de 1 segundo
    }, 1000);
  });
});

console.log('El archivo JavaScript está funcionando');  // Esto debe aparecer en la consola del navegador


