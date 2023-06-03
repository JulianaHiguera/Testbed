<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <p>Redireccionando...</p>


    <?php
    $portFile = 'numero.txt';
    $port = file_get_contents($portFile); // Leer el puerto desde el archivo
    $newPort = intval($port) + 1; // Sumar uno al puerto obtenido
    
    $newUrl = "http://{$_SERVER['HTTP_HOST']}:$newPort"; // URL relativa con el nuevo puerto
    
    echo '<script>window.open("' . $newUrl . '", "_blank");</script>';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sistemaOperativo = $_POST['sistema-operativo'];
        $duracion = $_POST['duracion'];

        $password = "juli";
        $command = "echo '$password' | sudo -S ./crar_imagen.sh '$sistemaOperativo' '$duracion'";

        // Mostrar la alerta de contenedor creado antes de ejecutar el comando
        echo "
    <h3>El contenedor $sistemaOperativo ha sido creado por $duracion segundos....</h3>

    <script>        
        alert('El contenedor $sistemaOperativo sera creado por $duracion segundos.');

        // Ejecutar el comando después de que el usuario acepte la alerta
        setTimeout(function() {
            window.location.href = 'create-container.php?command=" . urlencode($command) . "';
        }, 0);
    </script>";
    }

    if (isset($_GET['command'])) {
        // Ejecutar el comando almacenado en la variable $_GET['command']
        $output = shell_exec($_GET['command']);

        // Mostrar la alerta de eliminación después de ejecutar el comando
        echo "<script>alert('El contenedor $output del sistema operativo $sistemaOperativo ha sido eliminado.');</script>";

        echo $output;
    }
    ?>

</body>

</html>