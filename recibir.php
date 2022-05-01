<?php
require_once 'databaseconnect.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$sql = "INSERT INTO registro (nombre, email, tel ) VALUES ('$nombre', '$email', '$tel')";

echo 'has sido registrado en la pagina';

?>