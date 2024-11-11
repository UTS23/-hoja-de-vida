<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Vida - Brayán Steven Moreno Soto</title>

    <!-- Vincular fuentes de Google y FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- AOS (Animate on Scroll) para animaciones -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Estilos CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f7fb;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 40px 20px;
            text-align: center;
            font-size: 28px;
            position: relative;
        }

        header p {
            font-size: 20px;
            margin-top: 10px;
            font-weight: 300;
        }

        .profile-img {
    border-radius: 50%;
    width: 120px;
    height: 120px;
    position: relative; /* Cambiar a 'relative' para que se quede en su flujo natural */
    top: -60px; /* Empuja la imagen hacia arriba para que quede más integrada en el header */
    left: 50%;
    transform: translateX(-50%); /* Centra la imagen en el header */
    border: 5px solid #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Agregar sombra para darle profundidad */
    transition: all 0.3s ease-in-out; /* Transición suave */
}

.profile-img:hover {
    transform: translateX(-50%) scale(1.1); /* Hace crecer la imagen ligeramente al pasar el cursor */
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.3); /* Aumenta la sombra cuando se hace hover */
}


        .content {
            max-width: 1100px;
            margin: 40px auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .content:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #333;
            font-size: 32px;
            text-align: center;
            margin-bottom: 10px;
        }

        .intro {
            font-size: 20px;
            color: #555;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        .cta-btn {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .cta-btn a {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-btn a:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }

        .section {
            margin-top: 50px;
        }

        .section h3 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .section ul {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .section ul li {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .section ul li:hover {
            transform: translateY(-5px);
        }

        .section ul li i {
            font-size: 28px;
            margin-right: 15px;
            color: #4CAF50;
        }

        footer {
            text-align: center;
            padding: 30px;
            background-color: #333;
            color: white;
            margin-top: 50px;
        }

        footer a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }

            .cta-btn a {
                width: 100%;
                padding: 14px;
            }

            .profile-img {
                width: 100px;
                height: 100px;
            }
        }

        /* Video Responsive */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin: 40px auto;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <img src="tu-imagen-de-perfil.jpg" alt="Foto de Perfil" class="profile-img" data-aos="fade-down" data-aos-duration="1000">
        <h1>Bienvenido a mi Hoja de Vida</h1>
        <p>¡Descubre mis habilidades, proyectos y trayectoria profesional!</p>
    </header>

    <!-- Video de presentación -->
    <div class="video-container" data-aos="fade-up" data-aos-duration="1000">
        <iframe src="https://www.youtube.com/embed/YOUTUBE_VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <!-- Main content -->
    <div class="content" data-aos="fade-up" data-aos-duration="1200">
        <h2>Brayán Steven Moreno Soto</h2>
        <p class="intro"><strong>Profesión:</strong> Desarrollador Web</p>
        <p><strong>Email:</strong> moosoto231242@gmail.com</p>
        <p><strong>Ubicación:</strong> Bucaramanga, Santander, Colombia</p>

        <p><strong>Sobre mí:</strong> Soy un desarrollador web con 5 años de experiencia creando aplicaciones dinámicas e interactivas. Mi enfoque principal es el desarrollo backend con Laravel, pero también tengo experiencia con frontend usando tecnologías como HTML, CSS y JavaScript. Me apasiona resolver problemas y crear soluciones eficientes y escalables.</p>

        <!-- Section: Skills -->
        <div class="section" data-aos="fade-up" data-aos-duration="1300">
            <h3>Habilidades</h3>
            <ul>
                <li><i class="fa fa-laptop-code"></i> Desarrollo Backend con Laravel</li>
                <li><i class="fa fa-code"></i> Desarrollo Frontend (HTML, CSS, JavaScript)</li>
                <li><i class="fa fa-database"></i> Bases de datos (MySQL, PostgreSQL)</li>
                <li><i class="fa fa-cogs"></i> Integración de APIs y Servicios Web</li>
                <li><i class="fa fa-github"></i> Control de versiones con Git y GitHub</li>
            </ul>
        </div>

        <!-- Section: Experience -->
        <div class="section" data-aos="fade-up" data-aos-duration="1400">
            <h3>Experiencia Laboral</h3>
            <ul>
                <li><i class="fa fa-briefcase"></i> Desarrollador Backend en XYZ Corp (2021 - Actualidad)</li>
                <li><i class="fa fa-briefcase"></i> Desarrollador Web en ABC Inc. (2019 - 2021)</li>
                <li><i class="fa fa-briefcase"></i> Freelancer en Desarrollo Web (2018 - 2019)</li>
            </ul>
        </div>

        <!-- Section: Education -->
        <div class="section" data-aos="fade-up" data-aos-duration="1500">
            <h3>Educación</h3>
            <ul>
                <li><i class="fa fa-graduation-cap"></i> Licenciatura en Ingeniería de Sistemas, Universidad XYZ (2015 - 2019)</li>
                <li><i class="fa fa-graduation-cap"></i> Curso de Desarrollo Web Full Stack, Platzi (2020)</li>
            </ul>
        </div>

        <!-- Button to create CV -->
        <div class="cta-btn" data-aos="fade-up" data-aos-duration="1600">
            <a href="#">Crear Hoja de Vida</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Brayán Steven Moreno Soto. Todos los derechos reservados.</p>
        <p>Visita mi <a href="#">portafolio</a></p>
    </footer>

    <!-- Inicializar AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>
