<?php

// Definiendo una función que retorna algo
function login()
{
   $rutadb = join(DIRECTORY_SEPARATOR, [dirname(dirname(__FILE__)), 'database', 'tsbd.db']);
   $db = new SQLite3($rutadb);
   $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :password";
   $stmt = $db->prepare($query);
   $stmt->bindValue(':usuario', $_POST['username'], SQLITE3_TEXT);
   $stmt->bindValue(':password', $_POST['password'], SQLITE3_TEXT);
   $result = $stmt->execute();
   $row = $result->fetchArray(SQLITE3_ASSOC);
   if ($row) {
      return true;
   } else {
      return false;

   }
}

?>