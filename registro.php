<!DOCTYPE html>
<html>

<head>
  <title>Registro de usuario</title>
  <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
</head>

<body>
  <?php include 'frontend/includes/menu.php'; ?>
  <div class="title-container">
    <h1>Registro de usuario</h1>
  </div>

  <form action="backend/auth/register.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario"><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo"><br>

    <input type="submit" value="Registrar">
  </form>
</body>

</html>