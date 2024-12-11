<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE Formulario";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Base de Datos creada satisfactoriamente<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Formulario";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //dbname = $dbname eso esta viendo si de verdad esta conectada la base de datos con el archivo php
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE usuarios (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(30) NOT NULL,
  Apellido VARCHAR(30) NOT NULL,
  Telefono int(50) NOT NULL
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table usuarios creada Exitosamente";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>