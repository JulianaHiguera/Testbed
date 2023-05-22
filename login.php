<!DOCTYPE html>
<html>

<head>
  <title>BinaryBlade - Inicio</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
</head>

<body>
  <?php include 'frontend/includes/menu.php'; ?>
  <div class="title-container">
    <h1>Log in</h1>
  </div>


  <div class="content">
    <form method="post" action="cookies.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Log In">
      <div id="error-message" style="display: none;"></div>

    </form>
  </div>
  <div class="counter-container">
    <div class="counter">
      <h2>Scheduled sessions</h2>
      <p>10</p> <!-- Aquí puedes reemplazar el número con el valor real de sesiones agendadas -->
    </div>
    <div class="counter">
      <h2>Total sessions</h2>
      <p>25</p> <!-- Aquí puedes reemplazar el número con el valor real de total de sesiones -->
    </div>
  </div>
  <script src="menu.js"></script>
</body>

</html>