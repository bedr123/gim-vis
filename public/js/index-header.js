// STICKY HEADER
const nav = document.querySelector(".navbar");
const body = document.querySelector("body");
const navHeight = nav.offsetHeight + "px";

function stickyNav() {
  if (window.scrollY >= 0) {
    body.style.paddingTop = navHeight;
    nav.classList.add("sticky");
  }
  if (window.scrollY >= 5) {
    nav.classList.add("inView");
  } else if (window.scrollY <= 4) {
    nav.classList.remove("inView");
  }
}

window.addEventListener("scroll", stickyNav);
