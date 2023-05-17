<?php
// Conexión a la base de datos
$rutadb = join('/', [dirname(dirname(__FILE__)), 'database', 'tsbd.db']);
echo $rutadb;
$db = new SQLite3($rutadb);

// Recupera los datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['password'];
$correo = $_POST['correo'];

// Prepara la consulta SQL de inserción
$stmt = $db->prepare("INSERT INTO usuarios (nombre, usuario, contrasena, correo) VALUES (:nombre, :usuario, :contrasena, :correo)");
$stmt->bindValue(':nombre', $nombre, SQLITE3_TEXT);
$stmt->bindValue(':usuario', $usuario, SQLITE3_TEXT);
$stmt->bindValue(':contrasena', $contrasena, SQLITE3_TEXT);
$stmt->bindValue(':correo', $correo, SQLITE3_TEXT);

// Ejecuta la consulta SQL
$result = $stmt->execute();

if ($num_rows_affected = $db->changes()) {
    echo "Registro insertado correctamente";
} else {
    echo "Error al insertar el registro";
}


// Cierra la conexión a la base de datos
$db->close();
?>
