<?php

session_start();

if( isset($_SESSION['error'] ) ) {
  $error = $_SESSION['error'];
  echo "<h1>Error</h1><p>Se ha producido un error en el envio del formulario.</p><p>Causa: $error</p><br><p>\nIntentelo otra vez dentro de 2 minutos y si el fallo prosigue, comuniquelo al encargado a esta direccion de correo: dinossolatte@gmail.com</p>";
} else {
  header('Location: index.htm');
  exit();
}
?>