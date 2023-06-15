<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $juego = $_POST['juego'];
  $genero = $_POST['genero'];
  $consola = $_POST['consola'];

 
  echo "<h2>Formulario recibido:</h2>";
  echo "<p>Nombre: $nombre</p>";
  echo "<p>Apellido Paterno: $apellido</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Juego favorito: $juego</p>";
  echo "<p>Género favorito: $genero</p>";
  echo "<p>Consola favorita: $consola</p>";

  
}
?>
