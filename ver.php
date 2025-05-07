<?php
if (!isset($_GET['video'])) {
    echo "No se especificó ningún video.";
    exit;
}

$video = basename($_GET['video']); 
$videoPath = "videos/" . $video;

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
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

        /* Carrusel */
        .movie-list-container {
            position: relative;
            margin: 20px 0;
        }

        .movie-list-wrapper {
            overflow: hidden;
            position: relative;
        }

        .movie-list {
            display: flex;
            transition: all 0.5s ease;
        }

        .movie-list-item {
            min-width: 270px;
            margin-right: 20px;
        }

        /* Flechas */
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: white;
            cursor: pointer;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50%;
        }

        .arrow.left-arrow {
            left: 10px;
        }

        .arrow.right-arrow {
            right: 10px;
        }

        .arrow:hover {
            background-color: rgba(0, 0, 0, 0.8);
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

   
    <div class="movie-list-container">
        <h1 class="movie-list-title">Relaciona a tus gustos vistos</h1>
        <div class="movie-list-wrapper">
            <i class="fas fa-chevron-left arrow left-arrow"></i> <!-- Flecha izquierda -->
            <div class="movie-list">
               

                       


<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/letal.jpeg" alt="">
                            <span class="movie-list-item-title">Arma letal</span>
                            <p class="movie-list-item-desc">mas peligrosa que nada</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ARMALETAL.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/wmz.jpeg" alt="">
                            <span class="movie-list-item-title">WMZ</span>
                            <p class="movie-list-item-desc">mexico fue el unico pais que pudo salvarse.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=WMZ.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/inmortal.jpeg" alt="">
                            <span class="movie-list-item-title">El inmortal</span>
                            <p class="movie-list-item-desc">nada lo detiene</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ELINMORTAL.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/rec.jpeg" alt="">
                            <span class="movie-list-item-title">REC</span>
                            <p class="movie-list-item-desc">nada te puede salvar</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=REC.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/texas.jpeg" alt="">
                            <span class="movie-list-item-title">Masacre en texas</span>
                            <p class="movie-list-item-desc">la que nos quitaron</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=TEXAS.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/capulina.jpeg" alt="">
                            <span class="movie-list-item-title">Mi aventura</span>
                            <p class="movie-list-item-desc">exito antaño para tus abuelos.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=MIAVENTURA.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/lancheros.jpeg" alt="">
                            <span class="movie-list-item-title">3 lancheros</span>
                            <p class="movie-list-item-desc">cars y mate en version mexicana.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=TRESLANCHEROS.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/alvin.jpeg" alt="">
                            <span class="movie-list-item-title">Alvin</span>
                            <p class="movie-list-item-desc">tres ardillas cantantes que vuelven loco a su dueño.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ALVIN.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/toy story.jpeg" alt="">
                            <span class="movie-list-item-title">Toy Story</span>
                            <p class="movie-list-item-desc">Andy tengo cancer atte: woody.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=TOYSTORY.mp4'">MIRAR</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/huevos.jpeg" alt="">
                            <span class="movie-list-item-title">Huevos</span>
                            <p class="movie-list-item-desc">¿tendran muchos que les faltan?.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=UNGALLO.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/donald.jpeg" alt="">
                            <span class="movie-list-item-title">Donald</span>
                            <p class="movie-list-item-desc">3 sobrinos cuidan del tio.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=DONALD.mp4'">MIRAR</button>
                        </div>
                        
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/coco.jpeg" alt="">
                            <span class="movie-list-item-title">COCO</span>
                            <p class="movie-list-item-desc">AY MI AMOR AY MI AMOR.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=COCO.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/ralph.jpeg" alt="">
                            <span class="movie-list-item-title">RALPH</span>
                            <p class="movie-list-item-desc">vanelope todo es tu culpa</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=RALPH.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/chucky.jpeg" alt="">
                            <span class="movie-list-item-title">Chucky</span>
                            <p class="movie-list-item-desc">el muñeco diabolico.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=CHUKY.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/chucky2.jpeg" alt="">
                            <span class="movie-list-item-title">Chucky 2</span>
                            <p class="movie-list-item-desc">el muñeco diabolico regresa.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=CHUCKY2.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/el conjuro.jpeg" alt="">
                            <span class="movie-list-item-title">El conjuro</span>
                            <p class="movie-list-item-desc">no la veas si estás solo.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=CONJURO.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/bluedemon.jpeg" alt="">
                            <span class="movie-list-item-title">Bluedemon</span>
                            <p class="movie-list-item-desc">de la lucha al cine.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=BLUEDEMON.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/el soldado.jpeg" alt="">
                            <span class="movie-list-item-title">el soldado</span>
                            <p class="movie-list-item-desc">chespirito siempre esta en nuestro 💖.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ELSOLDADO.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/mentiroso.jpeg" alt="">
                            <span class="movie-list-item-title">Mentiroso</span>
                            <p class="movie-list-item-desc">la verdad es una mentira</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=MENTIROSO.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/4f.jpeg" alt="">
                            <span class="movie-list-item-title">4 fantasticos</span>
                            <p class="movie-list-item-desc">Estreno exclusivo solo en tecflix.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=FANTASTICOS.mp4'">MIRAR</button>
                    </div>
                    <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/hitman.jpeg" alt="">
                            <span class="movie-list-item-title">Hitman</span>
                            <p class="movie-list-item-desc">agente secreto</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=HITMAN.mp4'">MIRAR</button>
                    </div>
                    <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/niños.jpeg" alt="">
                            <span class="movie-list-item-title">Son como niños</span>
                            <p class="movie-list-item-desc">Negro jose .</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=SONCOMONINIÑOS.mp4'">MIRAR</button>
                    </div>
                    <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/furioso.jpeg" alt="">
                            <span class="movie-list-item-title">Rapido y furioso 2</span>
                            <p class="movie-list-item-desc">la mejor de la saga</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=RAPIDOYFOGOSO.mp4'">MIRAR</button>
                    </div>
                    <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/ted 2.jpeg" alt="">
                            <span class="movie-list-item-title">TED 2</span>
                            <p class="movie-list-item-desc">trueno amigos is back</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=TED2.mp4'">MIRAR</button>
                    </div>
                    <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/lobo.jpeg" alt="">
                            <span class="movie-list-item-title">Lobo de wall street</span>
                            <p class="movie-list-item-desc">vendeme esta pluma.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=WALLSTREET.mp4'">MIRAR</button>
                    </div>         


                        
            </div>
            <i class="fas fa-chevron-right arrow right-arrow"></i> <!-- Flecha derecha -->
        </div>
    </div>

    <script>
        // Obtener las flechas y el carrusel
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');
        const movieList = document.querySelector('.movie-list');

        // Función para mover el carrusel
        let currentPosition = 0;
        const itemWidth = document.querySelector('.movie-list-item').offsetWidth + 20; // 20px es el margen entre los items

        // Mover el carrusel a la izquierda
        leftArrow.addEventListener('click', () => {
            if (currentPosition < 0) {
                currentPosition += itemWidth;
                movieList.style.transform = `translateX(${currentPosition}px)`;
            }
        });

        // Mover el carrusel a la derecha
        rightArrow.addEventListener('click', () => {
            const totalWidth = movieList.scrollWidth;
            const visibleWidth = movieList.offsetWidth;
            if (currentPosition > -(totalWidth - visibleWidth)) {
                currentPosition -= itemWidth;
                movieList.style.transform = `translateX(${currentPosition}px)`;
            }
        });
    </script>

</body>
</html>
