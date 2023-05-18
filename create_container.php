<?php

require 'vendor/autoload.php';

use Docker\Docker;
use Docker\ContainerCreateParams;

$docker = new Docker();

$params = new ContainerCreateParams();
$params->setImage('nginx'); // Define la imagen del contenedor
$params->setCmd(['/bin/bash', '-c', 'while true; do echo "Hello, Docker!"; sleep 1; done']); // Define el comando a ejecutar dentro del contenedor

$container = $docker->containerCreate($params);

echo 'Contenedor creado con éxito. ID: ' . $container->getId() . PHP_EOL;