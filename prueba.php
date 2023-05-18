<!DOCTYPE html>
<html>

<head>
    <title>Crear Contenedor Docker</title>
</head>

<body>
    <button id="create-container-btn">Crear Contenedor</button>
    <script>
        document.getElementById('create-container-btn').addEventListener('click', function () {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'create-container.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        alert('Se ha creado el contenedor con ID: ' + xhr.responseText);
                    } else {
                        alert('Error al crear el contenedor: ' + xhr.status);
                    }
                }
            };
            xhr.send();
        });
    </script>
</body>

</html>