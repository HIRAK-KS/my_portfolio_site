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

/////////////////// SWIPER /////////////////////
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "vertical",
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
