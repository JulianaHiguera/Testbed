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
    if (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true') { ?>
      <li><a href="login.php"><i class="fas fa-sign-in"></i> <span>Iniciar sesion</span></a></li>
    <?php } else { ?>
      <li><a href="logout.php"><i class="fas fa-power-off"></i> <span>Cerrar sesion</span></a></li>
    <?php }
    ?>
  </ul>
</nav>
</ul>
</nav>