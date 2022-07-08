function showNav() {
    let burgerbtn = document.querySelector('#burger-btn');
    burgerbtn.style.transform == '' ? burgerbtn.style.transform = 'rotate(-180deg)' : burgerbtn.style.transform = '';

    let footer = document.querySelector('footer');
    footer.style.transform == '' ? footer.style.transform = 'translateY(0px)' : footer.style.transform = '';

    let myLinks = document.querySelector('#myLinks');
    myLinks.style.transform == '' ? myLinks.style.transform = 'translateY(0px)' : myLinks.style.transform = '';
}