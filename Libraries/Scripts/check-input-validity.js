document.addEventListener('DOMContentLoaded', () => {

const passwordChecks = {
    weak: /^(?=.*[a-z])/g,
    medium: /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/g,
    strong: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/g
};

const passwordInput = document.querySelector('input[name="password"]');
const passwordCheckP = document.querySelector('#password-check');

const colors = [ "red", "gold", "green" ];
let currColor;

if(passwordInput != null && passwordCheckP != null) {

    passwordInput.addEventListener('input', () => {
        // console.log(passwordInput.value);

        if(passwordChecks.weak.test(passwordInput.value)) {
            currColor = colors[0];
            passwordCheckP.textContent = 'Fiabilité du mot de passe: Faible';
        }
        if(passwordChecks.medium.test(passwordInput.value)) {
            currColor = colors[1];
            passwordCheckP.textContent = 'Fiabilité du mot de passe: Moyenne';
        }
        if(passwordChecks.strong.test(passwordInput.value)) {
            currColor = colors[2];
            passwordCheckP.textContent = 'Fiabilité du mot de passe: Forte';
        }

        passwordCheckP.style.color = currColor;
        passwordInput.style.borderBottomColor = currColor;
    })
}

})