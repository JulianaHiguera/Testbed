<!DOCTYPE html>
<html>

<head>
    <title>BinaryBlade - Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
</head>

<body>
    <?php
    if (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true') {
        // El usuario no está autenticado, redirigir a la página de inicio de sesión
        header("Location: login.php");
        exit;
    }
    ?>
    <?php
    include('frontend/includes/menu.php');
    ?>

    <header>
        <h1 class="titulo">Welcome to the platform Testbed</h1>
    </header>
    <main>
        <div class="contenedor-imagen">
            <img src="frontend/images/imagen.png" alt="Imagen de la Página">
        </div>
        <div class="contenedor-resumen">
            <p class="resumen">Welcome to the *** innovation, this is a beta relase of the new platform offers a new
                high level controlling capacity for students, professors and researcges to learn about testbed.</p>
        </div>
    </main>
    <script src="menu.js"></script>
</body>

</html>