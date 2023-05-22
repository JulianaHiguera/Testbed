<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sistemaOperativo = $_POST['sistema-operativo'];
    $duracion = $_POST['duracion'];

    $password = "juli";
    $command = "echo '$password' | sudo -S ./crar_imagen.sh '$sistemaOperativo' '$duracion'";
    $output = shell_exec($command);

    // Imprimir el código JavaScript para mostrar la alerta
    echo "<script>
        var confirmation = confirm('El contenedor $output será creado por $duracion minutos. ¿Deseas continuar?');
        if (confirmation) {
            // Si el usuario acepta, enviar el formulario
            document.getElementById('myForm').submit();
        } else {
            // Si el usuario cancela, mostrar un mensaje de cancelación
            alert('Operación cancelada.');
        }
    </script>";

    // Detener la ejecución de PHP aquí para esperar la respuesta del usuario
    exit();
}
?>

<!-- Resto de tu código HTML del formulario -->
<div class="form-container">
    <form id="myForm" action="create-container.php" method="post">
        <!-- ... -->
    </form>
</div>