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
function navbarAnimation() {
    if (window.scrollY > 130) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
    if (window.scrollY > 200) {
        navbar.classList.add("slide");
    } else {
        navbar.classList.remove("slide");
    }
}

window.addEventListener("scroll", navbarAnimation);
