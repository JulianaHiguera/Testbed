<?php
$db = new SQLite3('../database/tsbd.db');
$query = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :password";
$stmt = $db->prepare($query);
$stmt->bindValue(':usuario', $_POST['username'], SQLITE3_TEXT);
$stmt->bindValue(':password', $_POST['password'], SQLITE3_TEXT);
$result = $stmt->execute();
$row = $result->fetchArray(SQLITE3_ASSOC);
if ($row) {
   setcookie("logged_in", "true", time() + 3600, "/", "localhost");
   setcookie("usuario_loged", $_POST['username'], time() + 3600, "/", "localhost");
   header("Location: ../../index.php"); // redirigir a la página de inicio
   exit();
} else {
   setcookie("logged_in", "false", time() + 3600);
   echo '<script>alert("Usuario y/o contraseña incorrectos"); window.location.href = "login.php";</script>';

}


?>