/////////////////// HAMBURGER /////////////////////
const button = document.getElementsByClassName("hamburger-button");
const nav = document.getElementById("nav");
const toggleSections = document.querySelectorAll(".action-link");

button[0].addEventListener("click", () => {
  button[0].classList.toggle("open");
  nav.classList.toggle("open");
});

toggleSections.forEach((toggleSections) => {
  toggleSections.addEventListener("click", () => {
    button[0].classList.remove("open");
    nav.classList.remove("open");
  });
});

/////////////////// SPLIDE /////////////////////
var splide = new Splide("#main-carousel", {
  pagination: false,
});

var thumbnails = document.getElementsByClassName("thumbnail");
var current;

for (var i = 0; i < thumbnails.length; i++) {
  initThumbnail(thumbnails[i], i);
}

function initThumbnail(thumbnail, index) {
  thumbnail.addEventListener("click", function () {
    splide.go(index);
  });
}

splide.on("mounted move", function () {
  var thumbnail = thumbnails[splide.index];

  if (thumbnail) {
    if (current) {
      current.classList.remove("is-active");
    }

    thumbnail.classList.add("is-active");
    current = thumbnail;
  }
});

splide.mount();
