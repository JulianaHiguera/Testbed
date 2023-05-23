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
    <form method="get" action="registro.php">
      <input type="submit" value="Register">
    </form>
  </div>
  <!-- <div class="counter-container">
    <div class="counter">
      <h2>Scheduled sessions</h2>
      <p>10</p> 
    </div>
    <div class="counter">
      <h2>Total sessions</h2>
      <p>25</p>
    </div>
  </div> -->
  <script src="frontend/js/menu.js"></script>
</body>

</html>