<?php
$sistemaOperativo = $_POST['sistema-operativo'];
$duracion = $_POST['duracion'];

$password = "juli";
$command = "echo '$password' | sudo -S ./crar_imagen.sh '$sistemaOperativo'";

$output = shell_exec($command);
echo $output;
?>