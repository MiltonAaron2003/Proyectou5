<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECFLIX</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
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
                <div class="logout-container">
                    <button class="logout-button" onclick="location.href='perfiles.php'">Salir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <div class="content-container">

            <!-- Contenido destacado -->
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/monster 1.jpeg');">
                <img class="featured-title" src="img/monster inc.jpeg" alt="Imagen de Monsters Inc.">
                <p class="featured-desc">
                    Los monstruos de Monsters, Inc. tienen más miedo de los niños que los niños de los monstruos. Pero
                    los monstruos necesitan los gritos de los niños para alimentar su mundo, y los niños se están
                    volviendo tan difíciles de asustar que el mundo de los monstruos está sufriendo apagones.
                </p>
                <button class="featured-button" onclick="location.href='ver.php?video=MONSTERINC.mp4'">MIRAR</button>
            </div>
            <!-- Mas vistas -->
            <div class="movie-list-container">
                <h1 class="movie-list-title">Lo mas visto</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
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
                            <img class="movie-list-item-img" src="img/anabelle.jpeg" alt="">
                            <span class="movie-list-item-title">Anabelle</span>
                            <p class="movie-list-item-desc">La maldición a la ficción</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ANABELL.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/titere.jpeg" alt="">
                            <span class="movie-list-item-title">El titere</span>
                            <p class="movie-list-item-desc">Miedo que es irreal</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ELTITERE.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/tension.jpeg" alt="">
                            <span class="movie-list-item-title">Alta tension</span>
                            <p class="movie-list-item-desc">tres Cuidado con el peligro</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ALTATENSION.mp4'">MIRAR</button>
                        </div>
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
                    <i class="fas fa-chevron-right arrow"></i> <!-- Flecha para el carrusel -->
                </div>
            </div>
            <!-- Movie List Terror -->
            <div class="movie-list-container">
                <h1 class="movie-list-title">Terror</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
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
                            <img class="movie-list-item-img" src="img/anabelle.jpeg" alt="">
                            <span class="movie-list-item-title">Anabelle</span>
                            <p class="movie-list-item-desc">La maldición a la ficción</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ANABELL.mp4'">MIRAR</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/titere.jpeg" alt="">
                            <span class="movie-list-item-title">El titere</span>
                            <p class="movie-list-item-desc">Miedo que es irreal</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ELTITERE.mp4'">MIRAR</button>
                        </div>
                        
                    </div>
                    <i class="fas fa-chevron-right arrow"></i> 
                </div>
            </div>

            <!-- Movie List Animadas -->
            <div class="movie-list-container">
                <h1 class="movie-list-title">Animadas</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
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
                    </div>
                    <i class="fas fa-chevron-right arrow"></i> 
                </div>
            </div>

             <!-- Movie List Animadas -->
             <div class="movie-list-container">
                <h1 class="movie-list-title">Suspenso</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/tension.jpeg" alt="">
                            <span class="movie-list-item-title">Alta tension</span>
                            <p class="movie-list-item-desc">tres Cuidado con el peligro</p>
                            <button class="movie-list-item-button" onclick="location.href='ver.php?video=ALTATENSION.mp4'">MIRAR</button>
                        </div>
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
                    </div>
                    <i class="fas fa-chevron-right arrow"></i> 
                </div>
            </div>

             <div class="movie-list-container">
                <h1 class="movie-list-title">Antaño</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
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
                    </div>
                    <i class="fas fa-chevron-right arrow"></i> 
            </div>

             <!-- Movie List Animadas -->
             <div class="movie-list-container">
                <h1 class="movie-list-title">Accion y diversion</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
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
                    <i class="fas fa-chevron-right arrow"></i> 
                </div>
            </div>
            <!-- Contenido destacado -->
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515)">
                <img class="featured-title" src="img/f-t-2.png" alt="">
                <p class="featured-desc" style="text-align: center; margin: 0 auto; display: block;">
                    Proyecto realizado por personal importante y para dar mayor distribución al cine de cualquier tipo.
                </p>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
