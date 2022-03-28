const navbarList = document.querySelector('.navbar-list');

document.querySelector(".hamburger").onclick = () => {
  navbarList.classList.add("show");
}

document.querySelector(".close").onclick = () => {
  navbarList.classList.remove("show");
}

//For NavBar Ends

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("hero");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "flex";
}

const interval = setInterval(function () {
  plusSlides(1);
}, 5000);

//For Hero Ends

const body = document.querySelector('#body');

document.querySelector(".light-switch").onclick = () => {
  body.classList.remove("dark");
  localStorage.clear();
  localStorage.setItem("themeStatus", "light");
}

document.querySelector(".dark-switch").onclick = () => {
  body.classList.add("dark");
  localStorage.clear();
  localStorage.setItem("themeStatus", "dark");
}

if (localStorage.getItem("themeStatus") == "dark") {
  body.classList.add("dark");
}

if (localStorage.getItem("themeStatus") == "light") {
  body.classList.remove("dark");
}
//For Dark Mode Ends

const loginButton = document.querySelector('.popup-window');

document.querySelector(".login").onclick = () => {
  loginButton.classList.add("popup-active");
}

document.querySelector(".popup-close").onclick = () => {
  loginButton.classList.remove("popup-active");
}

