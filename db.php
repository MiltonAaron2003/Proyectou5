<?php
$host = "localhost";
$user = "root"; // cambia si usas otro usuario
$pass = "";     // cambia si tu MySQL tiene contraseña
$db = "tecflix";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
