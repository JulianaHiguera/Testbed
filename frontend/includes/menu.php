<?php
$rutabase = dirname(dirname(dirname(__FILE__)));
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<nav class="menu">
  <div class="menu-icon">
    <i class="fas fa-bars"></i>
  </div>
  <ul class="menu-items">
    <li><a href="index.php"><i class="fas fa-home"></i> <span>Home</span></a></li>
    <li><a href="experimentos.php"><i class="fas fa-flask"></i> <span>Experimentos</span></a></li>
    <li><a href="#"><i class="fas fa-user"></i> <span>
          <?php
          $username = $_COOKIE['usuario_loged'];
          echo $username ?>
        </span></a></li>
    <li><a href="#"><i class="fas fa-cog"></i> <span>Configuración</span></a></li>
    <?php

    $esta_logueado = true; // supongamos que el usuario está conectado
    $ruta_anterior = dirname($_SERVER['PHP_SELF'], 1);

    if (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true') {
      $rutaDestino = 'login.php';
      $nameDestino = "Iniciar Sesion";
      $iconoFa = "fas fa-sign-in";
    } else {
      $rutaDestino = 'logout.php';
      $nameDestino = "Cerrar Sesion";
      $iconoFa = "fas fa-power-off";
    }

    ?>
    <li><a href="<?php echo $rutaDestino ?>"><i class="<?php echo $iconoFa ?>"></i> <span>
          <?php echo $nameDestino ?>
        </span></a></li>
  </ul>
</nav>
</ul>
</nav>