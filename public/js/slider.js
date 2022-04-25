// ELEMENT SELECTOR
$ = (q) => {
    let els = document.querySelectorAll(q);

    if (els.length > 1) return els;
    else if (els.length === 1) return els[0];
};

// SLIDER
const slideshow = $(".header__slideshow");
const slideItem = $(".slider-content");

let slideIndex = 1;
slideshow.style.transform = `translateX(-${slideIndex * 100}%)`;

const autoSlide = () => {
    if (slideIndex > slideItem.length - 2) return;
    slideIndex++;
    slideshow.style.transform = `translateX(-${slideIndex * 100}%)`;
    slideshow.style.transition = ".8s ease-in-out";
};

let timer = setInterval(autoSlide, 7000);

$("#btn-left").addEventListener("click", () => {
    if (slideIndex < 1) return;
    slideIndex--;
    slideshow.style.transform = `translateX(-${slideIndex * 100}%)`;
    slideshow.style.transition = ".8s ease-in-out";
    clearInterval(timer);
    timer = setInterval(autoSlide, 7000);
});

$("#btn-right").addEventListener("click", () => {
    if (slideIndex > slideItem.length - 2) return;
    slideIndex++;
    slideshow.style.transform = `translateX(-${slideIndex * 100}%)`;
    slideshow.style.transition = ".8s ease-in-out";
    clearInterval(timer);
    timer = setInterval(autoSlide, 7000);
});

slideshow.addEventListener("transitionend", () => {
    if (slideItem[slideIndex].id === "first-clone") {
        slideIndex = 1;
        slideshow.style.transition = "none";
        slideshow.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
    if (slideItem[slideIndex].id === "last-clone") {
        slideIndex = slideItem.length - 2;
        slideshow.style.transition = "none";
        slideshow.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
});
