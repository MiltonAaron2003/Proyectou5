<?php
session_start();
require "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Validar credenciales (usando SHA-256 como en el SQL)
$sql = "SELECT * FROM users WHERE username = ? AND password = SHA2(?, 256)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
} else {
    echo "Usuario o contraseña incorrectos.";
}
