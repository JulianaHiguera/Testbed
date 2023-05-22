<?php
$sistemaOperativo = $_POST['sistema-operativo'];
$duracion = $_POST['duracion'];

$password = "juli";
$command = "echo '$password' | sudo -S ./crar_imagen.sh '$sistemaOperativo' '$duracion'";

$output = shell_exec($command);
echo $output;
?>