"use strict";

/************************************** Functions **************************************/
function changeSlide(slider, slideNumber) {
    const percentage = -100*slideNumber;
    const spaces = 4*slideNumber;
    slider.style.transform = `translateX(calc(${percentage}% - ${spaces}rem`;
}

/************************************** Events Listeners **************************************/

/***
 * Display the to-top button when scrolling down
 ***/
const toTopButton = document.querySelector(".to-top");
if (window.scrollY > window.innerHeight/2) {
    toTopButton.classList.add("active");
}
window.addEventListener('scroll', () => {
    if (window.scrollY > window.innerHeight/2) {
        toTopButton.classList.add("active");
    } else {
        toTopButton.classList.remove("active");
    }
});


/***
 * Open the nav menu on mobile
 ***/
const burgerMenu = document.querySelector(".burger-menu");
burgerMenu.addEventListener("click", () =>{
    document.querySelector("header").classList.toggle("menu-open");
})


/***
 * Change the slide of testimony's slider when clic on arrows
 ***/
const testimonySlider = document.querySelector(".slider-testimony");
const testimonySliderLength = document.querySelectorAll(".slider-testimony article").length-1;
let testimonySliderCounter = 0;

const testimonySliderLeftArrow = document.querySelector(".container-testimony .arrow-left");
testimonySliderLeftArrow.addEventListener("click", () => {
    if(testimonySliderCounter == 0) {
        testimonySliderCounter = testimonySliderLength;
    } else {
        testimonySliderCounter--;
    }
    changeSlide(testimonySlider, testimonySliderCounter);
})

const testimonySliderRightArrow = document.querySelector(".container-testimony .arrow-right");
testimonySliderRightArrow.addEventListener("click", () => {
    if(testimonySliderCounter == testimonySliderLength) {
        testimonySliderCounter = 0;
    } else {
        testimonySliderCounter++;
    }
    changeSlide(testimonySlider, testimonySliderCounter);
})
