<?php
// Mostrar todos los errores de PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definir las constantes de conexión a la base de datos, si no están definidas previamente
if (!defined('DB_HOST')) define('DB_HOST', 'localhost'); // Cambia si es necesario
if (!defined('DB_USER')) define('DB_USER', 'root'); // Usuario por defecto de XAMPP
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', ''); // Sin contraseña por defecto
if (!defined('DB_NAME')) define('DB_NAME', 'mensajes'); // Cambia por tu base de datos

// Crear la conexión a la base de datos
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres
$conn->set_charset("utf8");

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar que los campos no estén vacíos
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['comentario'])) {

        // Escapar las entradas para prevenir inyecciones SQL
        $nombre = $conn->real_escape_string(trim($_POST['nombre']));
        $email = $conn->real_escape_string(trim($_POST['email']));
        $comentario = $conn->real_escape_string(trim($_POST['comentario']));

        // Validar que el correo sea válido
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Insertar los datos en la tabla contactos
            $sql = "INSERT INTO contactos (nombre, email, comentario) VALUES ('$nombre', '$email', '$comentario')";

            // Comprobar la ejecución de la consulta
            if ($conn->query($sql) === TRUE) {
                echo "<p class='success-message'>Su mensaje se ha enviado correctamente.</p>"; // Mensaje de éxito con CSS
                echo "<a href='portafolio.php' class='back-button'>Volver a la página principal</a>"; // Botón con estilo
            } else {
                echo "Error al enviar el mensaje: " . $conn->error;
            }
        } else {
            echo "El correo electrónico no es válido.";
        }
    } else {
        echo "Por favor completa todos los campos.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Contacto</title>
    <link rel="stylesheet" href="styles4.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="icon" href="images/tecnologia.ico" type="image/x-icon">

</head>
<body>

        <footer>
            <p>&copy; 2024 Gina Alejandra Avendaño. Todos los derechos reservados.</p>
        </footer>
    
</body>
</html>
