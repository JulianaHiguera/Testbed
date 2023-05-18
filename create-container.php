<?php
// Datos de configuración de Docker
$dockerHost = 'unix:///var/run/docker.sock'; // o 'tcp://localhost:2375' para conexión a través de TCP
$dockerEndpoint = $dockerHost . '/v1.41/containers/create';

// Configuración del nuevo contenedor
$containerName = 'mi_contenedor';
$image = 'imagen_docker:tag';

// Crear solicitud para crear el contenedor
$data = array(
    'Image' => $image,
    'name' => $containerName
);

$options = array(
    CURLOPT_URL => $dockerEndpoint,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    CURLOPT_RETURNTRANSFER => true
);

// Enviar la solicitud a la API de Docker
$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);

// Decodificar la respuesta de la API de Docker
$containerInfo = json_decode($response, true);

// Obtener el ID del contenedor creado
$containerId = $containerInfo['Id'];

// Iniciar el contenedor
$dockerStartEndpoint = $dockerHost . '/v1.41/containers/' . $containerId . '/start';

$options = array(
    CURLOPT_URL => $dockerStartEndpoint,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true
);

$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);

// Verificar el resultado de la solicitud
if ($response === false) {
    echo 'Error al crear el contenedor.';
} else {
    echo 'Contenedor creado exitosamente.';
}
?>