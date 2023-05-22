<?php
$sistemaOperativo = $_POST['sistema-operativo'];
$duracion = $_POST['duracion'];

$password = "juli";
$command = "echo '$password' | sudo -S ./crar_imagen.sh '$sistemaOperativo' '$duracion'";

// Imprimir mensaje de contenedor creado
echo "<script>alert('El contenedor $sistemaOperativo ha sido creado por $duracion segundos.');</script>";


$output = shell_exec($command);

// Imprimir mensaje de finalización
echo "<script>alert('El contenedor $output del sistema operativo $sistemaOperativo a sido eliminado.');</script>";

echo $output;
?>