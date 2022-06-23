// code copié sans vergogne sur w3schools lol

document.addEventListener('DOMContentLoaded', () => {

    const tabs = document.querySelectorAll('.tab');
    let steps = document.querySelectorAll('.step');
    const stepCont = document.querySelector('#step-cont');
    
    let currTab = 0;
    showTab(currTab);
    console.log(tabs[currTab]);

    // ajoute les span.step pour chaque onglet
    for(let i = 0; i < tabs.length; i++) {
        stepCont.innerHTML += "<span class='step'></span>";
    }
    
    function showTab(n) {
    
        tabs[n].style.display = 'block';
        
        for(let i = 0; i < steps.length; i++) {
            steps[i].className = steps[i].className.replace(' active', '');
            steps[i].className += ' active';
        }
        
        if (n == 0) {
            document.querySelector("#prevBtn").style.display = "none";
        } 
        else {
            document.querySelector("#prevBtn").style.display = "inline";
        }
        
        if (n == (tabs.length - 1)) {
            document.querySelector("#nextBtn").style.backgroundImage = "url(../Style/Icons/checkmark.png)";
        } 
        else {
            document.querySelector("#nextBtn").style.backgroundImage = "url(../Style/Icons/right-arrow.png)";
        }
        
    }
    
    function validateForm() {
    
        let x, i;
        let valid = true;
    
        x = document.querySelectorAll('input');
    
        for(i = 0; i < x.length; i++) {
            if(x[i].value == "") {
                x[i].className += " invalid";
                valid = false;
            }
        }
    
        if(valid) document.querySelectorAll('.step')[currTab].className += " finish";
        return valid;
    }

    function nextPrev(n) {
        
        if(n == 1 && !validateForm()) return false;
    
        tabs[currTab].style.display = 'block';
        
        currTab += n;
    
        if(currTab >= tabs.length) {
            document.getElementByClass('info-form').submit();
            return false;
        }
    
        showTab(currTab);
    }

    // controle avec les boutons
    document.querySelector('#prevBtn').addEventListener('click', nextPrev(-1));
    document.querySelector('#nextBtn').addEventListener('click', nextPrev(1));
    
    // controle avec le clavier
    document.addEventListener('keydown', (e) => {
        if(e.key == 'ArrowLeft') nextPrev(-1);
        if(e.key == 'ArrowRight') nextPrev(1);
    });

});