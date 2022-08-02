/**
 * Fonction qui est executée à chaque fois qu'on presse le bouton du footer
 */
function showNav() {
    // le bouton tourne : la flèche pointe vers l'autre sens
    let burgerbtn = document.querySelector('footer #burger-btn');
    burgerbtn.style.transform == '' ? 
        // fait tourner le bouton de 180° dans le sens anti-horaire
        burgerbtn.style.transform += ' rotate(-180deg)' : 
        burgerbtn.style.transform = '';

    // le footer monte ou descends
    let footer = document.querySelector('footer');
    footer.style.transform == '' ? 
        // remets le footer "en dessous" du viewport
        footer.style.transform += ' translateY(0px)' : 
        footer.style.transform = '';
}