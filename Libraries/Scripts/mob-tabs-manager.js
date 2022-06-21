// code copié sans vergogne sur w3schools lol

document.addEventListener('DOMContentLoaded', () => {

let currTab = 0;
showTab(currTab);


document.querySelector('#prevBtn').addEventListener('click', nextPrev(-1));
document.querySelector('#nextBtn').addEventListener('click', nextPrev(1));


function showTab(n) {

    let x = document.getElementsByClassName('tab');
    x[n].style.display = 'block';
    
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } 
    else {
        document.getElementById("prevBtn").style.display = "inline";
    }
      
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Terminer";
    } 
    else {
        document.getElementById("nextBtn").innerHTML = "Suivant";
    }

    fixStepIndicator(n);
}

function nextPrev(n) {

    let x = document.querySelectorAll('.tab');
    
    if(n == 1 && !validateForm()) return false;

    x[currTab].style.display = 'none';
    currTab += n;

    if(currTab >= x.length) {
        document.querySelector('.info-form').submit();
        return false;
    }

    showTab(currTab);
}

function validateForm() {

    let x, y, i;
    let valid = true;

    x = document.querySelectorAll('.tab');
    y = x[currTab].querySelectorAll('input');

    for(i = 0; i < y.length; i++) {
        if(y[i].value == "") {
            y[i].className += "invalid";
            valid = false;
        }
    }

    if(valid) document.querySelectorAll('.step')[currTab].className += "finish";
    return valid;
}

function fixStepIndicator(n) {

    let i;
    let x = document.querySelectorAll('.step');

    for(i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(' active', '');
    }

    x[n].className += "active";
}

});