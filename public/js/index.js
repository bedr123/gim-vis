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
const navHeight = nav.offsetHeight + "px";

function stickyNav() {
    if (window.scrollY >= 80) {
        body.style.paddingTop = navHeight;
        nav.classList.add("sticky");
    } else if (window.scrollY <= 1) {
        body.style.paddingTop = 0;
        nav.classList.remove("sticky");
    }
    if (window.scrollY >= 100) {
        nav.classList.add("inView");
    } else if (window.scrollY <= 1) {
        nav.classList.remove("inView");
    }
}

window.addEventListener("scroll", stickyNav);
