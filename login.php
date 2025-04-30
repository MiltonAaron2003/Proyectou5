<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "tecflix"; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Preparamos la consulta con los nombres correctos de las columnas
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario_db = $resultado->fetch_assoc();
        // Verificamos la contraseña utilizando password_verify
        if (password_verify($contrasena, $usuario_db["contrasena"])) {
            $_SESSION["usuario"] = $usuario_db["usuario"];
            header("Location: index.php"); // Redirigimos a la página de inicio
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - TECFLIX</title>
    <style>
        body {
            background: #0f0f0f;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .form-container {
            background: #1e1e1e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(77, 191, 0, 0.6);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #4dbf00;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: none;
            border-radius: 8px;
            background: #333;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #4dbf00;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #3aa000;
        }

        .mensaje {
            margin-top: 15px;
            font-size: 0.9em;
            font-weight: bold;
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login - TECFLIX</h2>
        <?php if (!empty($error)) echo "<p class='mensaje'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required><br>
            <input type="password" name="contrasena" placeholder="Contraseña" required><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
