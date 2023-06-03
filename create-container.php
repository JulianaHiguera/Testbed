<!DOCTYPE html>
<html>

<head>
    <script>
        window.onload = function () {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var port = parseInt(this.responseText) + 1; // Incrementa el número de puerto en 1
                    var redirectUrl = "http://" + window.location.hostname + ":" + port;
                    var newTab = window.open(redirectUrl, '_blank');
                    newTab.focus();
                }
            };
            xmlhttp.open("GET", "numero.txt", true);
            xmlhttp.send();
        };
    </script>
</head>

<body>
    <p>Redireccionando...</p>


    <?php
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