<?php

$password = "juli";
$command = "echo '$password' | sudo -S ./crar_imagen.sh";

$output = shell_exec($command);
echo $output;
?>
