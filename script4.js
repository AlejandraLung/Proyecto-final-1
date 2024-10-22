// Selecciona el formulario por su ID y agrega un evento de 'submit'
document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita el envío real del formulario
  alert('Gracias por tu mensaje. Te contactaremos pronto.');
});

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

const formulario = document.getElementById('contactForm');
const nombreInput = document.getElementById('nombre');
const emailInput = document.getElementById('email');
const comentarioInput = document.getElementById('comentario');
const errorNombre = document.getElementById('error-nombre');
const errorEmail = document.getElementById('error-email');
const errorComentario = document.getElementById('error-comentario');

// Variables para almacenar errores
let errorNombreValido = false;
let errorEmailValido = false;
let errorComentarioValido = false;

// Función para validar nombre
function validarNombre() {
  const nombreValor = nombreInput.value.trim();
  if (nombreValor === '') {
    errorNombre.textContent = 'Nombre inválido';
    errorNombre.style.color = 'red';
    nombreInput.style.border = '1px solid red';
    errorNombreValido = false;
  } else {
    errorNombre.textContent = '';
    nombreInput.style.border = '1px solid #ccc';
    errorNombreValido = true;
  }
}

// Función para validar email
function validarEmail() {
  const emailValor = emailInput.value.trim();
  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (!emailRegex.test(emailValor)) {
    errorEmail.textContent = 'Correo inválido';
    errorEmail.style.color = 'red';
    emailInput.style.border = '1px solid red';
    errorEmailValido = false;
  } else {
    errorEmail.textContent = '';
    emailInput.style.border = '1px solid #ccc';
    errorEmailValido = true;
  }
}

// Función para validar comentario
function validarComentario() {
  const comentarioValor = comentarioInput.value.trim();
  if (comentarioValor === '') {
    errorComentario.textContent = 'Comentario inválido';
    errorComentario.style.color = 'red';
    comentarioInput.style.border = '1px solid red';
    errorComentarioValido = false;
  } else {
    errorComentario.textContent = '';
    comentarioInput.style.border = '1px solid #ccc';
    errorComentarioValido = true;
  }
}

// Agregar eventos de cambio a los inputs
nombreInput.addEventListener('change', validarNombre);
emailInput.addEventListener('change', validarEmail);
comentarioInput.addEventListener('change', validarComentario);

// Agregar evento de envío al formulario
formulario.addEventListener('submit', (e) => {
  e.preventDefault();
  validarNombre();
  validarEmail();
  validarComentario();
  if (errorNombreValido && errorEmailValido && errorComentarioValido) {
    // Enviar formulario
    console.log('Formulario válido');
  } else {
    console.log('Formulario inválido');
  }
});

const form = document.getElementById('contactForm');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const comentario = document.getElementById('comentario').value;

    if (nombre === '' || email === '' || comentario === '') {
        alert('Por favor, complete todos los campos');
        return;
    }

    form.submit();
});
