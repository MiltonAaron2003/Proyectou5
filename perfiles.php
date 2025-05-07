<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}

$conexion = new mysqli("localhost", "root", "", "tecflix");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Agregar perfil
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion']) && $_POST['accion'] === 'agregar') {
    $nombre = $_POST['nombre'];
    $imagen = $_POST['imagen'];
    $stmt = $conexion->prepare("INSERT INTO perfiles (nombre, imagen) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $imagen);
    $stmt->execute();
    header("Location: perfiles.php");
    exit;
}

// Editar perfil
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion']) && $_POST['accion'] === 'editar') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $imagen = $_POST['imagen'];
    $stmt = $conexion->prepare("UPDATE perfiles SET nombre = ?, imagen = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nombre, $imagen, $id);
    $stmt->execute();
    header("Location: perfiles.php");
    exit;
}

// Eliminar perfil
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $stmt = $conexion->prepare("DELETE FROM perfiles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: perfiles.php");
    exit;
}

// Obtener perfiles
$resultado = $conexion->query("SELECT * FROM perfiles");
$perfiles = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfiles - TECFLIX</title>
    <style>
        body {
            background: #0f0f0f;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 60px;
        }

        h2 {
            color: #4dbf00;
            margin-bottom: 20px;
        }

        .perfil-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .perfil {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 180px;
            box-shadow: 0 0 10px rgba(77, 191, 0, 0.6);
        }

        .perfil img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .perfil button {
            margin: 4px;
            padding: 8px 12px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-entrar { background: #4dbf00; color: #fff; }
        .btn-editar { background: #ffa500; color: #000; }
        .btn-eliminar { background: #e50914; color: #fff; }

        .perfil input {
            width: 100%;
            margin: 6px 0;
            padding: 8px;
            border-radius: 6px;
            border: none;
        }

        .logout-container {
            position: fixed;
            top: 20px;
            right: 20px;
        }

        .logout-button {
            background-color: #e50914;
            border: none;
            padding: 10px 15px;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="logout-container">
        <form action="logout.php" method="POST">
            <button class="logout-button" type="submit">Salir</button>
        </form>
    </div>

    <h2>¿Quién está viendo?</h2>

    <div class="perfil-container">
        <?php foreach ($perfiles as $perfil): ?>
            <div class="perfil">
                <img src="<?= htmlspecialchars($perfil['imagen']) ?>" alt="<?= htmlspecialchars($perfil['nombre']) ?>">
                <h3><?= htmlspecialchars($perfil['nombre']) ?></h3>
                <form action="inicio.php" method="POST" style="margin-bottom:5px;">
                    <input type="hidden" name="id_perfil" value="<?= $perfil['id'] ?>">
                    <button type="submit" class="btn-entrar">Entrar</button>
                </form>
                <form action="perfiles.php" method="POST">
                    <input type="hidden" name="id" value="<?= $perfil['id'] ?>">
                    <input type="text" name="nombre" value="<?= htmlspecialchars($perfil['nombre']) ?>" required>
                    <input type="text" name="imagen" value="<?= htmlspecialchars($perfil['imagen']) ?>" required>
                    <input type="hidden" name="accion" value="editar">
                    <button type="submit" class="btn-editar">Editar</button>
                </form>
                <form action="perfiles.php" method="GET">
                    <input type="hidden" name="eliminar" value="<?= $perfil['id'] ?>">
                    <button type="submit" class="btn-eliminar" onclick="return confirm('¿Seguro que deseas eliminar este perfil?')">Eliminar</button>
                </form>
            </div>
        <?php endforeach; ?>

        <!-- Agregar Perfil -->
        <div class="perfil">
            <form method="POST">
                <h3>Agregar Perfil</h3>
                <input type="hidden" name="accion" value="agregar">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="imagen" placeholder="Ruta de imagen" required>
                <button type="submit" class="btn-entrar">Agregar</button>
            </form>
        </div>
    </div>

</body>
</html>
