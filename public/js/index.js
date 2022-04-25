// NAVBAR MENU
const navbar = document.querySelector(".navbar");
const hamburgerMenu = document.getElementById("hamburger-menu");
const bars = document.querySelectorAll(".bar");
const menu = document.querySelector(".navbar__container");

hamburgerMenu.addEventListener("click", () => {
    bars.forEach((bar) => {
        bar.classList.toggle("active");
    });
    menu.classList.toggle("active");
    navbar.classList.toggle("active");
});

// DROPDOWN
const dropdownBtn = document.querySelectorAll(".navbar__item button");

dropdownBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        btn.nextElementSibling.classList.toggle("active");
    });
});

// STICKY HEADER
const nav = document.querySelector(".navbar");
const body = document.querySelector("body");

function stickyNav() {
    if (window.scrollY >= 80) {
        nav.classList.add("active");
    } else {
        nav.classList.remove("active");
    }
}

window.addEventListener("scroll", stickyNav);
