/////////////////// HAMBURGER /////////////////////
const button = document.getElementsByClassName("hamburger-button");
const nav = document.getElementById("nav");
const toggleSections = document.querySelectorAll(".action-link");
const mask = document.getElementById("mask");

button[0].addEventListener("click", () => {
  button[0].classList.toggle("open");
  nav.classList.toggle("open");
  mask.classList.toggle("open");
});

toggleSections.forEach((toggleSections) => {
  toggleSections.addEventListener("click", () => {
    button[0].classList.remove("open");
    nav.classList.remove("open");
    mask.classList.remove("open");
  });
});

mask.addEventListener("click", () => {
  button[0].classList.remove("open");
  nav.classList.remove("open");
  mask.classList.remove("open");
});

/////////////////// SPLIDE /////////////////////
document.addEventListener("DOMContentLoaded", function () {
  var main = new Splide("#main-carousel", {
    type: "fade",
    rewind: true,
    pagination: false,
    arrows: false,
  });

  var thumbnails = new Splide("#thumbnail-carousel", {
    fixedWidth: 100,
    fixedHeight: 60,
    gap: 10,
    rewind: true,
    pagination: false,
    cover: true,
    isNavigation: true,
    breakpoints: {
      600: {
        fixedWidth: 60,
        fixedHeight: 44,
      },
    },
  });

  main.sync(thumbnails);
  main.mount();
  thumbnails.mount();
});
