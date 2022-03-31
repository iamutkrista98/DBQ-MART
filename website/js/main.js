const navbarList = document.querySelector('.navbar-list');

document.querySelector(".hamburger").onclick = () => {
  navbarList.classList.add("show");
}

document.querySelector(".close").onclick = () => {
  navbarList.classList.remove("show");
}

//For NavBar Ends


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

//For Popup Window Ends

// var current = new Date();

// if (current.getHours() > 18) {
//   body.classList.add("dark");
//   localStorage.clear();
//   localStorage.setItem("themeStatus", "dark");
// }
// else if (current.getHours() > 6 && current.getHours() < 18) {
//   body.classList.remove("dark");
//   localStorage.clear();
//   localStorage.setItem("themeStatus", "light");
// }

// //For automatic DarkMode according to time