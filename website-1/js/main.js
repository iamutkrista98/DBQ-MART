const navbarList = document.querySelector('.navbar-list');

document.querySelector(".hamburger").onclick = () => {
    navbarList.classList.add("show");
}

document.querySelector(".close").onclick = () => {
    navbarList.classList.remove("show");
}

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

const body = document.querySelector('#body');

document.querySelector(".light-switch").onclick = () => {
    body.classList.remove("dark");
}

document.querySelector(".dark-switch").onclick = () => {
    body.classList.add("dark");
}
