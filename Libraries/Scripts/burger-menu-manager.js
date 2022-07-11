/**
 * Fonction qui est executée à chaque fois qu'on presse le bouton du footer
 */
function showNav() {
    // le bouton tourne : la flèche pointe vers l'autre sens
    let burgerbtn = document.querySelector('#burger-btn');
    burgerbtn.style.transform == '' ? 
        burgerbtn.style.transform += ' rotate(-180deg)' : 
        burgerbtn.style.transform = '';

    // le footer monte ou descends
    let footer = document.querySelector('footer');
    footer.style.transform == '' ? 
        footer.style.transform += ' translateY(0px)' : 
        footer.style.transform = '';
}