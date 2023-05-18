<?php
require 'vendor/autoload.php'; // Carga la biblioteca Docker PHP

use Docker\Docker;

// Crear una instancia de Docker
$docker = new Docker();

// Crear un nuevo contenedor
$container = $docker->containerCreate(['Image' => 'ubuntu']);

// Obtener el ID del contenedor creado
$containerId = $container['Id'];

// Devolver el ID del contenedor
echo $containerId;