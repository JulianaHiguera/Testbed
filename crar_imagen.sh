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

CONTAINER_NAME="mi_contenedor_${OS}_$(date +%s)"
if $OS == 'debian'{
    sudo docker run --detach --name $CONTAINER_NAME $OS tail -f /dev/null -p 90:80 debian_accesible_3;
} 
else {
     sudo docker run --detach --name $CONTAINER_NAME $OS tail -f /dev/null;
}
    

# Esperar el tiempo especificado
sleep $TIME

# Detener y eliminar el contenedor
sudo docker stop $CONTAINER_NAME
