<?php
echo "Inicio el archivo cookies.";
// Llamando al archivo2.php
include 'backend/auth/logining.php';
echo "Esto va despues dle include.";
// Verificando el valor de retorno
if (login()) {
    setcookie("logged_in", "true", time() + 3600, "/");
    setcookie("usuario_loged", $_POST['username'], time() + 3600);
    header("Location: index.php"); // redirigir a la página de inicio
    exit();
} else {
    setcookie('logged_in', 'false', time() + 3600, '/');
    echo '<script>alert("Usuario y/o contraseña incorrectos") ; window.location.href = "login.php";;</script>';
}

?>