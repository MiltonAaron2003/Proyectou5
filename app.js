// Selección de flechas y listas de películas
const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

// Control de desplazamiento horizontal para las listas de películas
arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;

  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;

    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log("Películas visibles según ancho:", Math.floor(window.innerWidth / 270));
});

// MODO OSCURO: Alternar estilos
const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container, .movie-list-title, .navbar-container, .sidebar, .left-menu-icon, .toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});

// Mostrar el video al hacer clic en el botón
document.addEventListener("DOMContentLoaded", () => {
  const btnMirar = document.getElementById("btn-mirar");
  const videoContainer = document.getElementById("video-container");

  if (btnMirar) {
    btnMirar.addEventListener("click", () => {
      // Mostrar el contenedor de video
      videoContainer.style.display = "block"; // Establece display a block
      videoContainer.scrollIntoView({ behavior: "smooth" }); // Desplaza suavemente hacia el video
    });
  }
});

