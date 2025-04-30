<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require "db.php";
$user_id = $_SESSION['user_id'];
$sql = "SELECT title FROM favorite_movies WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a TECFLIX</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">TECFLIX</h1></div>
            <div class="profile-container">
                <div class="profile-text-container">
                    Bienvenido, <?= $_SESSION['username'] ?> |
                    <a href="logout.php" style="color: #4dbf00;">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 style="padding: 30px;">Tus películas favoritas</h2>
        <ul style="padding: 30px;">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li><?= htmlspecialchars($row['title']) ?></li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
