document.addEventListener('DOMContentLoaded', () => {

const passwordCheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/g
const mailCheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g

const passwordInput = document.querySelector('input[name="password"]');
const mailInput = document.querySelector('input[name="email"]');
const errorCont = document.querySelector('.error-cont');

if(passwordInput != null && mailInput != null && errorCont != null) {

    passwordInput.addEventListener('input', () => {
        if(passwordInput.textContent.match(passwordCheck) != null) {
            errorCont.textContent += 
            `
            Erreur !
            Votre mot de passe doit contenir :
            - au moins 8 caractères,
            - une lettre minuscule et majuscule,
            - un chiffre,
            - un caractère spécial.
            `
        } else errorCont.textContent = '';
    });

    mailInput.addEventListener('input', () => {
        if(mailInput.textContent.match(mailCheck) != null) {
            errorCont.textContent += 
            `
            Erreur !
            Email invalide.
            `
        } else errorCont.textContent = '';

        console.log('change')
    });
}

})