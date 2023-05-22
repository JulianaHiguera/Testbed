#!/bin/bash

# Comandos para crear la imagen de docker
# Tiempo por defecto (en segundos)
DEFAULT_TIME=30  # 1 hora

# Verificar si se especificaron el sistema operativo y el tiempo personalizados
if [ $# -eq 2 ]; then
    OS=$1
    TIME=$2
else
    OS="ubuntu"
    TIME=$DEFAULT_TIME  # Tiempo por defecto (1 hora)
fi

# Generar un nombre único para el contenedor
CONTAINER_NAME="mi_contenedor_$OS_$(date +%s)"  # Añade un timestamp al nombre

# Crear el contenedor y ejecutarlo en segundo plano
sudo docker run --detach --name $CONTAINER_NAME $OS tail -f /dev/null

# Esperar el tiempo especificado
sleep $TIME

# Detener y eliminar el contenedor
sudo docker stop $CONTAINER_NAME
