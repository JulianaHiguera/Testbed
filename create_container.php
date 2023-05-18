<?php
require 'vendor/autoload.php';

use Docker\Docker;

// Crea una instancia del cliente Docker
$docker = Docker::create();

// Define los parámetros para crear un contenedor
$containerName = 'mi-contenedor';
$imageName = 'ubuntu:latest';

// Crea el contenedor
$container = $docker->containerCreate([
    'Image' => $imageName,
    'Cmd' => ['echo', 'Hola, Mundo!'],
    'Name' => $containerName,
]);

// Inicia el contenedor
$docker->containerStart($container->getId());

echo 'Contenedor creado y en ejecución.';
?>