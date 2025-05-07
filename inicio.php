<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}

// Verifica que se recibió un perfil
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id_perfil'])) {
    $id_perfil = intval($_POST['id_perfil']);

    // Puedes validar si el perfil pertenece al usuario si lo deseas aquí

    // Guardamos el perfil en sesión
    $_SESSION['id_perfil'] = $id_perfil;

    // Redirigir a la página principal de películas
    header("Location: index.php");
    exit;
} else {
    // Si alguien entra directo a este archivo sin seleccionar perfil
    header("Location: perfiles.php");
    exit;
}
