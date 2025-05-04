<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECFLIX</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Tecflix</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">Contenido de todos los generos</li>
                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <span class="profile-text">Sesión Iniciada</span>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="container">
        <div class="content-container">

            <!-- Contenido destacado -->
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/monster 1.jpeg');">
                <img class="featured-title" src="img/monster inc.jpeg" alt="Imagen de Monsters Inc.">
                <p class="featured-desc">
                    Los monstruos de Monsters, Inc. tienen más miedo de los niños que los niños de los monstruos. Pero
                    los monstruos necesitan los gritos de los niños para alimentar su mundo, y los niños se están
                    volviendo tan difíciles de asustar que el mundo de los monstruos está sufriendo apagones.
                </p>
                <button class="featured-button" onclick="location.href='ver.php?video=MONSTERINC.mp4'">MIRAR</button>

                </div>
            </div>

            <!-- Lista de películas -->
            <div class="movie-list-container">
                <h1 class="movie-list-title">Mas Vistos</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/alvin.jpeg" alt="">
                            <span class="movie-list-item-title">Alvin</span>
                            <p class="movie-list-item-desc">tres ardillas cantantes que vuelven loco a su dueño.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ALVIN.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/chucky.jpeg" alt="">
                            <span class="movie-list-item-title">Chucky</span>
                            <p class="movie-list-item-desc">el muñeco diabolico.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=CHUKY.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/boyka.jpeg" alt="">
                            <span class="movie-list-item-title">Boyka</span>
                            <p class="movie-list-item-desc">la violencia nunca fue opcion.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=BOYKA.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/bluedemon.jpeg" alt="">
                            <span class="movie-list-item-title">Bluedemon</span>
                            <p class="movie-list-item-desc">de la lucha al cine.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=BLUEDEMON.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/el conjuro.jpeg" alt="">
                            <span class="movie-list-item-title">el conjuro</span>
                            <p class="movie-list-item-desc">no la veas si estas solo.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=CONJURO.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/donald.jpeg" alt="">
                            <span class="movie-list-item-title">Donald</span>
                            <p class="movie-list-item-desc">3 sobrinos cuidan del tio.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=DONALD.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/el soldado.jpeg" alt="">
                            <span class="movie-list-item-title">el soldado</span>
                            <p class="movie-list-item-desc">chespirito siempre esta en nuestro 💖.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ELSOLDADO.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/4f.jpeg" alt="">
                            <span class="movie-list-item-title">4 fantasticos</span>
                            <p class="movie-list-item-desc">Estreno exclusivo solo en tecflix.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=FANTASTICOS.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/capulina.jpeg" alt="">
                            <span class="movie-list-item-title">Mi aventura</span>
                            <p class="movie-list-item-desc">exito antaño para tus abuelos.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=MIAVENTURA.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/toy story.jpeg" alt="">
                            <span class="movie-list-item-title">Toy Story</span>
                            <p class="movie-list-item-desc">Andy tengo cancer atte: woody.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=TOYSTORY.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/lancheros.jpeg" alt="">
                            <span class="movie-list-item-title">3 lancheros</span>
                            <p class="movie-list-item-desc">cars y mate en version mexicana.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=TRESLANCHEROS.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/huevos.jpeg" alt="">
                            <span class="movie-list-item-title">Huevos</span>
                            <p class="movie-list-item-desc">¿tendran muchos que les faltan?.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=UNGALLO.mp4'">MIRAR</button>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/wmz.jpeg" alt="">
                            <span class="movie-list-item-title">WMZ</span>
                            <p class="movie-list-item-desc">mexico fue el unico pais que pudo salvarse.</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=WMZ.mp4'">MIRAR</button>

                        </div>
                        
                        <!-- Puedes agregar más películas aquí -->
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

            <!-- Otro contenido destacado -->
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515)">
                <img class="featured-title" src="img/f-t-2.png" alt="">
                <p class="featured-desc" style="text-align: center; margin: 0 auto; display: block;">
                    proyecto realizado por personal importante y dar mayor distrubucion el cine de cualquier tipo
                </p>
            </div>

        </div>
    </div>

    <!-- Script JS -->
    <script src="app.js"></script>

</body>

</html>
