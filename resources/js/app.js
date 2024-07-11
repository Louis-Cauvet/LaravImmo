"use strict";

/*************************************
GLOBAL VARIABLES
 *************************************/
const token = window.Laravel.csrfToken;

/*************************************
 CLASSIC FUNCTIONS
 *************************************/

/***
 * Change the slide in a slider
 ***/
function changeSlide(slider, slideNumber) {
    const percentage = -100*slideNumber;
    const spaces = 4*slideNumber;
    slider.style.transform = `translateX(calc(${percentage}% - ${spaces}rem`;
    sliderCounter = slideNumber;
}

/***
 * Display an error message in an area passed in parameters
 ***/
function displayErrorMessage(errorArea, message) {
    errorArea.textContent = message;
    errorArea.style.display = 'inline-block';
}

/*************************************
 AJAX FUNCTIONS
 *************************************/

/***
 * Allow to make an AJAX call considering the token
 ***/
function csrfFetch(url, options = {}) {
    options.headers = {
        ...options.headers,
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': token
    };
    return fetch(url, options);
}

/*************************************
 EVENTS LISTENERS
 *************************************/

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

if(loginButton) {
    loginButton.addEventListener("click", () => {
        loginSection.classList.add("active");
    });
}

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
    const sliderParent = slider.parentElement;
    const containerSlider = sliderParent.parentElement;
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

/*************************************
 FORM SUBMISSIONS
 *************************************/

/***
 * Register user's form
 ***/
document.querySelector('#register-user-form').addEventListener('submit', function(event) {

    event.preventDefault();

    document.querySelectorAll('.text-danger').forEach(function(element) {
        element.style.display = 'none';
        element.textContent = '';
    });

    let hasError = false;

    const firstname = document.getElementById('firstname').value;
    if (firstname === '') {
        displayErrorMessage(document.getElementById('error-firstname'), 'Ce champ est obligatoire.');
        hasError = true;
    }

    const lastname = document.getElementById('lastname').value;
    if (lastname === '') {
        displayErrorMessage(document.getElementById('error-lastname'), 'Ce champ est obligatoire.');
        hasError = true;
    }

    const phone = document.getElementById('phone').value;
    const onlyDigitPattern = /^[0-9]+$/;
    if (phone === '') {
        displayErrorMessage(document.getElementById('error-phone'), 'Ce champ est obligatoire.');
        hasError = true;
    }
    else if (!onlyDigitPattern.test(phone)) {
        displayErrorMessage(document.getElementById('error-phone'), 'Ce champ peut contenir uniquement des chiffres');
        hasError = true;
    }

    const mail2 = document.getElementById('mail2').value;
    if (mail2 === '') {
        displayErrorMessage(document.getElementById('error-mail2'), 'Ce champ est obligatoire.');
        hasError = true;
    } else if (!/\S+@\S+\.\S+/.test(mail2)) {
        displayErrorMessage(document.getElementById('error-mail2'), 'Votre adresse doit posséder une @ et un . entourés d\'autres caractères pour être valide');
        hasError = true;
    }


    const password2 = document.getElementById('password2').value;
    const digitPattern = /[0-9]/;
    const letterPattern = /[a-zA-Z]/;
    const specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;
    if (password2.length < 8) {
        displayErrorMessage(document.getElementById('error-password2'), 'Le mot de passe doit contenir au moins 8 caractères.');
        hasError = true;
    } else if (!digitPattern.test(password2)) {
        displayErrorMessage(document.getElementById('error-password2'), 'Le mot de passe doit contenir au moins 1 chiffre.');
        hasError = true;
    } else if (!letterPattern.test(password2)) {
        displayErrorMessage(document.getElementById('error-password2'), 'Le mot de passe doit contenir au moins 1 lettre.');
        document.getElementById('error-password2').style.display = 'block';
        hasError = true;
    } else if (!specialCharPattern.test(password2)) {
        displayErrorMessage(document.getElementById('error-password2'), 'Le mot de passe doit contenir au moins 1 caractère spécial.');
        hasError = true;
    }

    const password2_confirmation = document.getElementById('password2_confirmation').value;
    if (password2 !== password2_confirmation) {
        displayErrorMessage(document.getElementById('error-password2_confirmation'), 'Vos 2 mots de passe ne correspondent pas.');
        hasError = true;
    }


    // Check if the user's mail already exists with an AJAX function
    if (!hasError) {
        csrfFetch("/check-email", {
            method: 'POST',
            body: JSON.stringify({ email: mail2 })
        })
        .then(response => response.json())
        .then(data => {
            if (data.existingEmail === true) {
                displayErrorMessage(document.getElementById('error-mail2'), 'L\'adresse mail renseignée est déja associée à un compte utilisateur.');
                hasError = true;
            } else {
                // If the mail doesn't already exists, send the form submission for a server's side validation
                event.target.submit();
            }
        })
        .catch(error => {
            console.error('Une erreur est survenue durant la vérification de l\'adresse mail :', error);
            displayErrorMessage(document.getElementById('error-mail2'), 'Une erreur est survenue lors de la vérification de l\'adresse mail.');
            hasError = true;
        });
    }
});


/***
 * Login user's form
 ***/
document.querySelector('#connect-user-form').addEventListener('submit', function(event) {

    event.preventDefault();

    document.querySelectorAll('.text-danger').forEach(function(element) {
        element.style.display = 'none';
        element.textContent = '';
    });

    let hasError = false;

    const mail = document.getElementById('mail').value;
    if (mail === '') {
        displayErrorMessage(document.getElementById('error-mail'), 'Ce champ est obligatoire.');
        hasError = true;
    } else if (!/\S+@\S+\.\S+/.test(mail)) {
        displayErrorMessage(document.getElementById('error-mail'), 'Votre adresse doit posséder une @ et un . entourés d\'autres caractères pour être valide');
        hasError = true;
    }

    const password = document.getElementById('password').value;
    if (password === '') {
        displayErrorMessage(document.getElementById('error-password'), 'Ce champ est obligatoire.');
        hasError = true;
    }

    if (!hasError) {
        csrfFetch("/verify-user", {
            method: 'POST',
            body: JSON.stringify({
                email: mail,
                password: password
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.existingUser === false) {
                displayErrorMessage(document.getElementById('error-mail'), data.message);
                hasError = true;
            } else {
                // If the mail doesn't already exists, send the form submission for a server's side validation
                event.target.submit();
            }
        })
        .catch(error => {
            console.error('Une erreur est survenue durant la vérification de l\'utilisateur :', error);
            displayErrorMessage(document.getElementById('error-mail'), 'Une erreur est survenue lors de la vérification de l\'utilisateur.');
            hasError = true;
        });
    }
});


/***
 * Sale property's form
 ***/
if (document.querySelector('#sale-property-form')) {
    document.querySelector('#sale-property-form').addEventListener('submit', function(event) {

        event.preventDefault();

        const digitPattern = /^\d+$/;

        document.querySelectorAll('.text-danger').forEach(function(element) {
            element.style.display = 'none';
            element.textContent = '';
        });

        let hasError = false;

        const title = document.getElementById('title').value;
        if (title === '') {
            displayErrorMessage(document.getElementById('error-title'), 'Ce champ est obligatoire.');
            hasError = true;
        }


        const price = document.getElementById('price').value;
        if (price === '') {
            displayErrorMessage(document.getElementById('error-price'), 'Ce champ est obligatoire.');
            hasError = true;
        } else if (price < 0) {
            displayErrorMessage(document.getElementById('error-price'), 'Le prix de votre bien ne peut pas être négatif.');
            hasError = true;
        }


        const description = document.getElementById('description').value;
        if (description === '') {
            displayErrorMessage(document.getElementById('error-description'), 'Ce champ est obligatoire.');
            hasError = true;
        }


        const address = document.getElementById('address').value;
        if (address === '') {
            displayErrorMessage(document.getElementById('error-address'), 'Ce champ est obligatoire.');
            hasError = true;
        }


        const city = document.getElementById('city').value;
        if (city === '') {
            displayErrorMessage(document.getElementById('error-city'), 'Ce champ est obligatoire.');
            hasError = true;
        }


        const postal = document.getElementById('postal').value;
        if (postal === '') {
            displayErrorMessage(document.getElementById('error-postal'), 'Ce champ est obligatoire.');
            hasError = true;
        } else if (!digitPattern.test(postal)) {
            displayErrorMessage(document.getElementById('error-postal'), 'Ce champ ne peut contenir que des chiffres.');
            hasError = true;
        }


        const area = document.getElementById('area').value;
        if (area === '') {
            displayErrorMessage(document.getElementById('error-area'), 'Ce champ est obligatoire.');
            hasError = true;
        } else if (area < 0) {
            displayErrorMessage(document.getElementById('error-area'), 'La surface de votre bien ne peut pas être négative.');
            hasError = true;
        }


        const nb_rooms = parseInt(document.getElementById('nb_rooms').value, 10);
        if (nb_rooms == '') {
            displayErrorMessage(document.getElementById('error-nb_rooms'), 'Ce champ est obligatoire.');
            hasError = true;
        } else if (nb_rooms < 0) {
            displayErrorMessage(document.getElementById('error-nb_rooms'), 'Le nombre de pièces de votre bien ne peut pas être négatif.');
            hasError = true;
        }


        const nb_bedrooms = parseInt(document.getElementById('nb_bedrooms').value, 10);
        if (nb_bedrooms == '') {
            displayErrorMessage(document.getElementById('error-nb_bedrooms'), 'Ce champ est obligatoire.');
            hasError = true;
        } else if (nb_bedrooms < 0) {
            displayErrorMessage(document.getElementById('error-nb_bedrooms'), 'Le nombre de chambres de votre bien ne peut pas être négatif.');
            hasError = true;
        } else if (nb_bedrooms > nb_rooms) {
            displayErrorMessage(document.getElementById('error-nb_bedrooms'), 'Le nombre de chambres de votre bien ne peut pas supérieur au nombre total de pièces.');
            hasError = true;
        }


        const nb_bathrooms = parseInt(document.getElementById('nb_bathrooms').value, 10);
        if (nb_bathrooms == '') {
            displayErrorMessage(document.getElementById('error-nb_bathrooms'), 'Ce champ est obligatoire.');
            hasError = true;
        } else if (nb_bathrooms < 0) {
            displayErrorMessage(document.getElementById('error-nb_bathrooms'), 'Le nombre de salles de bain de votre bien ne peut pas être négatif.');
            hasError = true;
        } else if (nb_bathrooms > nb_rooms) {
            displayErrorMessage(document.getElementById('error-nb_bathrooms'), 'Le nombre de salles de bain de votre bien ne peut pas supérieur au nombre total de pièces.');
            hasError = true;
        }


        if (!hasError) {
            csrfFetch('/check-user-connected' ,{
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                if (data.isConnected === true) {
                    event.target.submit();
                } else {
                    displayErrorMessage(document.getElementById('error-check-user-connected'), 'Connectez-vous à votre compte pour pouvoir nous soumettre un bien à vendre ou à louer !');
                }
            })
            .catch(error => {
                console.error('Une erreur est survenue durant la vérification de la connexion de l\'utilisateur :', error);
            });
        }
    });
}


/***
 * Contact form
 ***/
document.querySelector('#contact-form').addEventListener('submit', function(event) {

    event.preventDefault();

    document.querySelectorAll('.text-danger').forEach(function(element) {
        element.style.display = 'none';
        element.textContent = '';
    });

    let hasError = false;

    const contactFirstname = document.getElementById('contact-firstname').value;
    if (contactFirstname === '') {
        displayErrorMessage(document.getElementById('error-contact-firstname'), 'Ce champ est obligatoire.');
        hasError = true;
    }

    const contactLastname = document.getElementById('contact-lastname').value;
    if (contactLastname === '') {
        displayErrorMessage(document.getElementById('error-contact-lastname'), 'Ce champ est obligatoire.');
        hasError = true;
    }

    const contactMail = document.getElementById('contact-mail').value;
    if (contactMail === '') {
        displayErrorMessage(document.getElementById('error-contact-mail'), 'Ce champ est obligatoire.');
        hasError = true;
    } else if (!/\S+@\S+\.\S+/.test(contactMail)) {
        displayErrorMessage(document.getElementById('error-contact-mail'), 'Votre adresse doit posséder une @ et un . entourés d\'autres caractères pour être valide');
        hasError = true;
    }

    const contactPhone = document.getElementById('contact-phonenum').value;
    const onlyDigitPattern = /^[0-9]+$/;
    if (contactPhone === '') {
        displayErrorMessage(document.getElementById('error-contact-phonenum'), 'Ce champ est obligatoire.');
        hasError = true;
    }
    else if (!onlyDigitPattern.test(contactPhone)) {
        displayErrorMessage(document.getElementById('error-contact-phonenum'), 'Ce champ peut contenir uniquement des chiffres');
        hasError = true;
    }

    // Check if the user's mail already exists with an AJAX function
    if (!hasError) {
        event.target.submit();
    }
});

