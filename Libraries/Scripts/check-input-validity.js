document.addEventListener('DOMContentLoaded', () => {

// je créé des standards de viabilité de mot de passes
const passwordChecks = {
    // si le mdp ne contient que des lettres minuscules
    weak: /^(?=.*[a-z])/g,
    // si le mdp contient des lettres minuscule, majuscules et des chiffres et fait + de 6 caractères
    medium: /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/g,
    // si le mdp contient des lettres minuscules, majuscules, des chiffres et caractères spéciaux et fait + de 8 caractères 
    strong: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/g
};

// l'input dans lequel on va recuperer le mot de passe
const passwordInput = document.querySelector('input[name="password"]');
// la balise <p> dans laquelle je vais afficher le texte qui informe l'user de la viabilité
const passwordCheckP = document.querySelector('#password-check');


const inputs = document.querySelectorAll('input');

// couleurs du texte
const colors = [ "red", "gold", "green" ];
let currColor;

// si les deux variables existent, alors elles existent dans le formulaire
if(passwordInput != null && passwordCheckP != null) {

    // à chaque caractère entré dans l'input
    passwordInput.addEventListener('input', () => {
        // console.log(passwordInput.value);

        // compare chaque expression regulière avec la valeur de l'input
        if(passwordChecks.weak.test(passwordInput.value)) {
            // mdp faible: rouge
            currColor = colors[0];
            passwordCheckP.textContent = 'Fiabilité du mot de passe: Faible';
        }
        if(passwordChecks.medium.test(passwordInput.value)) {
            // mdp moyen: jaune
            currColor = colors[1];
            passwordCheckP.textContent = 'Fiabilité du mot de passe: Moyenne';
        }
        if(passwordChecks.strong.test(passwordInput.value)) {
            // mdp fort: vert
            currColor = colors[2];
            passwordCheckP.textContent = 'Fiabilité du mot de passe: Forte';
        }

        passwordCheckP.style.color = currColor;
        passwordInput.style.borderBottomColor = currColor;
    })
}


if(inputs.length > 0) {
    inputs.forEach((input) => {

            // si l'utilisateur a perdu le focus sur l'input
            input.addEventListener('focusout', () => {
                // si l'utilisateur n'a rien entré dans l'input
                if(input.value === "") {
                    let newElement = document.createElement('p');
                    newElement.className = 'field-alert';

                    // TODO: vérifier si le field-alert n'existe pas déjà
                        // créé un élément provisoire
                    input.after(newElement);
                    newElement.textContent = "Ce champ est obligatoire";
                }
                // sinon, si l
                else if(input.value !== "" && !!document.querySelector('field-alert')) {
                    document.querySelector('field-alert').textContent = "";
                }
            })
    })
}

})