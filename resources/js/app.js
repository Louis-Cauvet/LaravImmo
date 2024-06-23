"use strict";

/************************************** Functions **************************************/
function changeSlide(slider, slideNumber) {
    const percentage = -100*slideNumber;
    const spaces = 4*slideNumber;
    slider.style.transform = `translateX(calc(${percentage}% - ${spaces}rem`;
    sliderCounter = slideNumber;
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
});

/***
 * Open login modal
 ***/
const loginSection = document.getElementById("login-section");
const loginButton = document.getElementById("open-login-modal");
loginButton.addEventListener("click", () => {
    loginSection.classList.add("active");
});

/***
 * Switch between login and registration interfaces
 ***/
const loginInterface = document.querySelector(".login-interface");
const registerInterface = document.querySelector(".register-interface");

const registrationLink = document.getElementById("registration-link");
registrationLink.addEventListener("click", () => {
    loginInterface.classList.remove("active");
    registerInterface.classList.add("active");
});

const loginLink = document.getElementById("login-link");
loginLink.addEventListener("click", () => {
    registerInterface.classList.remove("active");
    loginInterface.classList.add("active");
});

/***
 * Close login modal
 ***/
const closeModalsButtons = document.querySelectorAll(".close-modal");
closeModalsButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", ()=> {
        loginSection.classList.remove("active");
    });
});

/***
 * Change the slide of slider when clic on arrows
 ***/
const slider = document.querySelector(".slider");
const sliderLength = document.querySelectorAll(".slider article").length-1;
let sliderCounter = 0;

if (slider) {
    const sliderParent = slider.parentElement;
    const containerSlider = sliderParent.parentElement;

    const sliderLeftArrow = sliderParent.querySelector(".arrow-left");
    sliderLeftArrow.addEventListener("click", () => {
        if(sliderCounter == 0) {
            sliderCounter = sliderLength;
        } else {
            sliderCounter--;
        }

        if(containerSlider.querySelector(".slider-tags")) {
            containerSlider.querySelector(".slider-tags .active").classList.remove('active');
            containerSlider.querySelector(`.slider-tags li[data-position="${sliderCounter}"]`).classList.add('active');
        }

        changeSlide(slider, sliderCounter);
    })

    const sliderRightArrow = sliderParent.querySelector(".arrow-right");
    sliderRightArrow.addEventListener("click", () => {
        if(sliderCounter == sliderLength) {
            sliderCounter = 0;
        } else {
            sliderCounter++;
        }

        if(containerSlider.querySelector(".slider-tags")) {
            containerSlider.querySelector(".slider-tags .active").classList.remove('active');
            containerSlider.querySelector(`.slider-tags li[data-position="${sliderCounter}"]`).classList.add('active');
        }

        changeSlide(slider, sliderCounter);
    })
}


/***
 * Change the slide of slider when clic on tags
 ***/
if (slider) {
    const sliderTags = containerSlider.querySelectorAll('.slider-tags li');
    sliderTags.forEach((tag) => {
        tag.addEventListener("click", () => {
            containerSlider.querySelector('.slider-tags .active').classList.remove('active');
            tag.classList.add('active');
            changeSlide(slider, tag.dataset.position);
        })
    });
}


/***
 * Open a notification
 ***/
const openNotifButton = document.querySelectorAll(".open-notification");
openNotifButton.forEach((openNotif) => {
    openNotif.addEventListener("click", ()=> {
        const notification = openNotif.parentElement;

        if (notification.classList.contains('open')) {
            notification.style.height = '90px';
            notification.classList.remove('open');
        } else {
            const notificationContentHeight = notification.scrollHeight + 30;
            notification.style.height = notificationContentHeight + 'px';
            notification.classList.add('open');
        }
    });
});

/***
 * Show the interested clients' list for a property
 ***/
const showInterestedClients = document.querySelectorAll(".show-interested-clients");
showInterestedClients.forEach((openInterested) => {
    openInterested.addEventListener("click", ()=> {
        const favoriteCard = openInterested.closest(".favorite-card");
        const interestedList = favoriteCard.querySelector(".interested-clients");

        if(interestedList.classList.contains("active")) {
            interestedList.classList.remove("active");
        } else {
            interestedList.classList.add("active");
        }
    });
});


/***
 * Open the textarea for write a client's notification
 ***/
const openNotificationTextarea = document.querySelectorAll(".write-notification-client");
openNotificationTextarea.forEach((openTextarea) => {
    openTextarea.addEventListener("click", ()=> {
        const writeArea = openTextarea.parentElement;

        if(writeArea.classList.contains("active")) {
            writeArea.classList.remove("active");
        } else {
            writeArea.classList.add("active");
        }
    });
});
