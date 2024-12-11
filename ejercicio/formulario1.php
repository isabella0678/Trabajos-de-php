<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

echo "<p>El nombre del usuario es: $nombre</p>";
echo "<p>El correo electrónico del usuario es: $apellido</p>";
echo "<p>El teléfono del usuario es: $telefono</p>";


$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexion Exitosa, con PDO Orientada a Objetos, extencion de PHP </br> :";
} catch(PDOException $e) {
  echo "Conexion Fallida, con PDO Orientada a Objetos, extencion de PHP </br> " . $e->getMessage();
}
?> 
