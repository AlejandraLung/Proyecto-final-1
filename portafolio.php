<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio de servicios</title>
    <link rel="stylesheet" href="style4.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="tecnologia.ico" />
    <link rel="stylesheet" href="style5.css">

</head>

</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <h1>GINA ALEJANDRA AVENDAÑO</h1>
            <p>Tecnóloga en análisis y desarrollo de sistemas de información</p>
        </div>
    </header>

    <!-- Conocimientos -->
    <section id="conocimientos">
        <h2>Conocimientos</h2>
        <p>Tengo conocimientos en bases de datos no relacionales, lenguaje de programación SQL y actualmente me estoy capacitando como desarrolladora full stack por parte de Talento Tech Bogotá.</p>
        
        <p>
Soy Técnico Laboral en Sistemas, graduada de la Academia Nacional de Aprendizaje en el año 2007, donde adquirí sólidos conocimientos en ofimática e instalación de redes. En 2023, obtuve el título de Tecnóloga en Análisis y Desarrollo de Sistemas de Información, lo que me permitió profundizar en lenguajes de programación como PHP, MySQL y SQL. Durante mi formación, realicé mis prácticas profesionales en Datatools S.A.S., colaborando en el proyecto de la Secretaría de Movilidad como analista de pruebas de software, desarrollando habilidades clave en la gestión de pruebas y aseguramiento de la calidad del software.
</p>

<p>
Poseo un dominio avanzado de los lenguajes de programación SQL y MySQL, y actualmente estoy ampliando mis competencias técnicas mediante un diplomado en desarrollo web full stack. En este programa, estoy reforzando mis conocimientos en HTML, CSS y JavaScript, con el objetivo de ofrecer un portafolio de servicios más completo y actualizado. Al final de esta página, podrás encontrar mis datos de contacto para solicitar mis servicios profesionales.
</p>

        <hr>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Técnica Laboral en Sistemas</td>
                    <td>2007</td>
                </tr>
                <tr>
                    <td>Tecnóloga ADSI</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>Ciberseguridad</td>
                    <td>2024</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Tecnóloga ADSO</td>
                    <td>2026</td>
                </tr>
            </tfoot>
        </table>
    </section>

    <!-- Imagen destacada -->
    <section id="about">
        <img src="tecnologia.png" alt="Tecnología">
    </section>

    <!-- Formulario de contacto -->
    <section id="contact">
        <h2>Contacto</h2>
        <form id="contactForm" action="guardar_contacto.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />
            <span id="error-nombre"></span>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Tu Email" required />
            <span id="error-email"></span>
            <label for="comentario">Comentario</label>
            <textarea id="comentario" name="comentario" placeholder="Escribe tu mensaje" required></textarea>
            <span id="error-comentario"></span>
            <button type="submit">Enviar</button>
            <button type="reset">Restablecer</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Gina Alejandra Avendaño. Todos los derechos reservados.</p>
    </footer>

    <script src="script4.js"></script>
</body>
</html>
