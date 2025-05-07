
const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

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
function mostrarVideo() {
    const videoContainer = document.getElementById('video-container');
    if (videoContainer) {
        videoContainer.style.display = 'block'; // Muestra el contenedor del video
    } else {
        console.error('No se encontró el contenedor del video.');
    }
}

function abrirVideo() {
    const videoUrl = 'videos/MONSTERINC.mp4'; // Ruta del video
    window.open(videoUrl, '_blank'); // Abre el video en una nueva pestaña o ventana
}

document.addEventListener("DOMContentLoaded", () => {
  const btnMirar = document.getElementById("btn-mirar");
  const videoContainer = document.getElementById("video-container");

  if (btnMirar) {
    btnMirar.addEventListener("click", () => {
      // Mostrar el contenedor de video
      mostrarVideo(); // Llama a la función mostrarVideo
      videoContainer.scrollIntoView({ behavior: "smooth" }); // Desplaza suavemente hacia el video
    });
  }

  // Selecciona todos los botones con la clase "movie-list-item-button"
  const buttons = document.querySelectorAll(".movie-list-item-button");

  // Agrega un evento click a cada botón
  buttons.forEach(button => {
      button.addEventListener("click", () => {
          const videoUrl = button.getAttribute("data-video"); // Obtiene la ruta del video desde el atributo data-video
          if (videoUrl) {
              window.open(videoUrl, "_blank"); // Abre el video en una nueva pestaña
          } else {
              console.error("No se encontró la ruta del video.");
          }
      });
  });
});

