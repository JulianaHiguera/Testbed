<!DOCTYPE html>
<html>

<head>
  <title>Formulario de Reserva</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
  <?php include 'menu.php'; ?>
  <div class="title-container">
    <h1>Reservation Form</h1>
  </div>

  <div class="form-container">
    <div class="form-card">
      <h2>Virtual Computing</h2>
      <form>
        <label for="equipo">Machine:</label>
        <input type="text" id="equipo" name="equipo" required>
        <label for="fecha">Reservation date:</label>
        <input type="date" id="fecha" name="fecha">
        <br>
        <label for="hora">Hour:</label>
        <input type="text" id="hora" name="hora">
        <label for="usuario">User:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="datos">Additional comments:</label>
        <textarea id="datos" name="datos" required></textarea>
        <input type="submit" value="Reserve">
      </form>
    </div>
  </div>
  <form action="crear-contenedor.php" method="post">
    <label for="sistema-operativo">Selecciona el sistema operativo:</label>
    <select name="sistema-operativo" id="sistema-operativo">
      <option value="ubuntu">Ubuntu</option>
      <option value="debian">Debian</option>
      <!-- Agrega más opciones según tus necesidades -->
    </select>

    <label for="duracion">Selecciona la duración:</label>
    <select name="duracion" id="duracion">
      <option value="10">10 minutos</option>
      <option value="20">20 minutos</option>
      <option value="30">30 minutos</option>
      <!-- Agrega más opciones según tus necesidades -->
    </select>

    <input type="submit" value="Crear contenedor">
  </form>

  <script src="menu.js"></script>

  <!-- Agregar el archivo JavaScript de flatpickr -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    // Inicializar el selector de hora con flatpickr
    flatpickr("#hora", {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
    });
  </script>
</body>
</body>

</html>