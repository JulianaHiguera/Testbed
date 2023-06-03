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
valor=$(cat num.txt)
echo "Valor actual: $valor"

# Cambiar el valor del archivo
nuevo_valor=$((valor + 1))
echo "$nuevo_valor" > num.txt

# Incrementar el valor en 1

# Actualizar el valor en el archivo
echo "$nuevo_valor" > archivo.txt

# Verificar el nuevo valor del archivo
valor_actualizado=$(cat archivo.txt)
echo "Valor actualizado: $valor_actualizado"



if [ "$OS" == "debian"  ]; then
    sudo docker run --detach --name $CONTAINER_NAME $OS tail -f /dev/null -p $nuevo_valor:80 debian_accesible_3
else
    sudo docker run --detach --name $CONTAINER_NAME $OS tail -f /dev/null
fi
# Esperar el tiempo especificado
sleep $TIME

# Detener y eliminar el contenedor
sudo docker stop $CONTAINER_NAME
