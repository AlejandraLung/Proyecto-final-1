<?php
// conexion.php

// Configuración de la base de datos
define('DB_HOST', 'localhost'); // Cambia 'localhost' si tu base de datos está en otro servidor
define('DB_USER', 'tu_usuario'); // Reemplaza con tu usuario de MySQL
define('DB_PASSWORD', 'tu_contraseña'); // Reemplaza con tu contraseña de MySQL
define('DB_NAME', 'mensajes'); // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres
$conn->set_charset("utf8");
?>






