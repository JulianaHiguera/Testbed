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
CONTAINER_NAME="mi_contenedor_${OS}_$(date +%s)"  # Añade un timestamp al nombre


# Consultar el valor actual del archivo
valor=$(cat numero.txt)

# Cambiar el valor del archivo
nuevo_valor=$((valor + 1))

# Incrementar el valor en 1

# Actualizar el valor en el archivo
echo "$nuevo_valor" > numero.txt

# Verificar el nuevo valor del archivo
valor_actualizado=$(cat num.txt)


if [ "$OS" == "debian" ]; then
    cadena=" "$nuevo_valor":80 debian_accesible_3"
elif [ "$OS" == "centos" ]; then
    cadena=" "$nuevo_valor":80 centos_accesible_3"
elif [ "$OS" == "alpine" ]; then
    cadena=" "$nuevo_valor":80 alpine_accesible_3"
elif [ "$OS" == "fedora" ]; then
    cadena=" "$nuevo_valor":80 fedora_accesible_3"
else
    cadena=" "$nuevo_valor":80 ubuntu_accesible_3"
fi

sudo docker run --detach --name $CONTAINER_NAME -p $cadena
echo $cadena

# Esperar el tiempo especificado
sleep $TIME

# Detener y eliminar el contenedor
sudo docker stop $CONTAINER_NAME
