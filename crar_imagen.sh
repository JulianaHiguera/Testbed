#!/bin/bash

# Comandos para crear la imagen de docker

# Nombre de la imagen y del contenedor
IMAGE_NAME="ubuntu"
CONTAINER_NAME="imagen_de_prueba"

# Tiempo por defecto (en segundos)
DEFAULT_TIME=3600  # 1 hora

# Verificar si se especificó un tiempo personalizado
if [ $# -eq 1 ]; then
    TIME=$1
else
    TIME=$DEFAULT_TIME
fi

# Crear el contenedor y ejecutarlo en segundo plano
sudo docker run --detach --name $CONTAINER_NAME $IMAGE_NAME tail -f /dev/null

# Esperar el tiempo especificado
sleep $TIME

# Detener y eliminar el contenedor
sudo docker stop $CONTAINER_NAME
