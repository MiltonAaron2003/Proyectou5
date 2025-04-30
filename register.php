<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = new mysqli("localhost", "root", "", "tecflix");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $usuario = $conexion->real_escape_string($_POST['usuario']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "✅ Usuario registrado correctamente.";
    } else {
        $mensaje = "❌ Error: " . $conexion->error;
    }

    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - TECFLIX</title>
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

        input[type="submit"],
        .boton-login {
            background-color: #4dbf00;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
            display: inline-block;
            text-decoration: none;
            margin-top: 10px;
        }

        input[type="submit"]:hover,
        .boton-login:hover {
            background-color: #3aa000;
        }

        .mensaje {
            margin-top: 15px;
            font-size: 0.9em;
            font-weight: bold;
        }

        .mensaje.success {
            color: #4dbf00;
        }

        .mensaje.error {
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registro en TECFLIX</h2>
        <form action="" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <input type="submit" value="Registrarse">
        </form>
        
        <?php if ($mensaje): ?>
            <div class="mensaje <?php echo strpos($mensaje, '✅') !== false ? 'success' : 'error'; ?>">
                <?= $mensaje ?>
            </div>
        <?php endif; ?>

        <?php if ($mensaje && strpos($mensaje, '✅') !== false): ?>
            <a href="login.php" class="boton-login">Iniciar sesión</a>
        <?php endif; ?>
    </div>
</body>
</html>
