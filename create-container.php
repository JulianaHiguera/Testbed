<?php

require 'vendor/autoload.php';

use Docker\Docker;
use Docker\API\Model\ContainersCreatePostBody;
use Docker\API\Model\HostConfig;
use Docker\API\Model\NetworkingConfig;

// Crea una instancia de Docker
$docker = Docker::create();

// Configura las opciones del contenedor
$containerConfig = new ContainersCreatePostBody();
$containerConfig->setImage('ubuntu');
$containerConfig->setCmd(['echo', 'Hello World']);

// Configura las opciones de red (si es necesario)
$networkingConfig = new NetworkingConfig();

// Configura las opciones del contenedor en el host
$hostConfig = new HostConfig();
$hostConfig->setNetworkMode('bridge');
$hostConfig->setNetworkingConfig($networkingConfig);

$containerConfig->setHostConfig($hostConfig);

// Crea el contenedor
$container = $docker->containerCreate($containerConfig);

// Inicia el contenedor
$docker->containerStart($container->getId());

?>