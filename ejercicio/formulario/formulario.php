<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$fechadenacimiento = $_POST['fechadenacimiento'];

echo "<p>El nombre del usuario es: $nombre</p>";
echo "<p>El correo electrónico del usuario es: $email</p>";
echo "<p>La contraseña del usuario es: $password</p>";
echo "<p>El teléfono del usuario es: $telefono</p>";
echo "<p>Es mayor de edad: $edad</p>";
echo "<p>La fecha de nacimiento del usuario es: $fechadenacimiento</p>";
?>
