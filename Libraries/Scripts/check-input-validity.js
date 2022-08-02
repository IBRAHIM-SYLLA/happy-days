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

                // si l'input est vide, créer un élément p avec la class field-alert
                if(input.value == "") {
                    if(document.querySelector('p.field-alert') == null) {
                        let fieldAlert = document.createElement('p');
                        fieldAlert.className = 'field-alert';
                        fieldAlert.textContent = "Ce champ est obligatoire";
                        input.after(fieldAlert);
                    }
                }
                // sinon, supprimer l'élément p avec la class field-alert
                else {
                    document.querySelector('p.field-alert').remove();
                }
            })
        })
    }

    let form = document.querySelector('.info-form');
    let data = new FormData(form);

    fetch('../Controllers/traitement.php', {
        method: 'POST',
        body: data,
    })
    .then((response) => response.json())
    .then((response) => {
        
        const mailCheck = document.querySelector('#mail-check');
        const mailInput = document.querySelector('input[name="email"]');

        let mailArray = response.map((item) => item.email);
        console.log(mailArray)

        if(mailInput != null && mailCheck != null) {

            mailInput.addEventListener('focusout', () => {
                
                let emailExists = mailArray.filter((email) => email === mailInput.value);

                if(window.location.href.includes('inscription')) {
                    if(emailExists.length >= 1) {
                        mailCheck.textContent = 'Cet email existe déjà';
                        mailCheck.style.color = 'red';
                        mailCheck.style.fontStyle = 'italic';
                    }
                    else {
                        mailCheck.textContent = '';
                    }
                }

                if(window.location.href.includes('connexion')) {
                    if(emailExists.length == 0) {
                        mailCheck.textContent = 'Cet email n\'existe pas';
                        mailCheck.style.color = 'red';
                        mailCheck.style.fontStyle = 'italic';
                    }
                    else {
                        mailCheck.textContent = '';
                    }
                }
            })
        }
    })
})