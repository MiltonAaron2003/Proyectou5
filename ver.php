<?php
// Verificamos si el parámetro 'video' está presente
if (!isset($_GET['video'])) {
    echo "No se especificó ningún video.";
    exit;
}

$video = basename($_GET['video']); // Sanitiza el nombre
$videoPath = "videos/" . $video;

// Verificamos si el archivo existe
if (!file_exists($videoPath)) {
    echo "El video no existe.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reproduciendo: <?php echo htmlspecialchars($video); ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #000;
            color: white;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            padding: 20px;
        }

        video {
            width: 80%;
            max-width: 900px;
            margin-top: 20px;
            border: 4px solid #fff;
            border-radius: 10px;
        }

        .back-button {
            margin-top: 30px;
            display: inline-block;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

    <h1>Estás viendo: <?php echo htmlspecialchars(pathinfo($video, PATHINFO_FILENAME)); ?></h1>

    <video controls autoplay>
        <source src="<?php echo $videoPath; ?>" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>

    <br>
    <a class="back-button" href="index.php">⏪ Volver a Tecflix</a>

</body>
</html>
