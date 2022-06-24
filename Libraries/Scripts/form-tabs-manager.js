// code copié sans vergogne sur w3schools lol

document.addEventListener('DOMContentLoaded', () => {

    const tabs = document.querySelectorAll('.tab');
    const stepCont = document.querySelector('#step-cont');
    
    // ajoute les span.step pour chaque onglet
    
        for(let i = 0; i < tabs.length; i++) {
            stepCont.innerHTML += "<span class='step'></span>";
        }
        const steps = document.querySelectorAll('.step');

    let currTab = 0;
    showTab(currTab);
    
    function showTab(n) {
        
        console.log(currTab + ' / ' + tabs.length);
        tabs[n].className.includes('final-step') ? tabs[n].style.display = 'flex' : tabs[n].style.display = 'block';
        
        steps.forEach((step) => {
            step.className = step.className.replace(" active", "");
        });
        
        steps[n].className += " active";
        
        try {
            if (n == 0) {
                document.querySelector("#prevBtn").style.display = "none";
            } 
            else {
                document.querySelector("#prevBtn").style.display = "inline";
            }
        }
        catch(e) {
            console.log(e);
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
        
        // if(n == 1 && !validateForm()) return false;
        
        // tabs.forEach((tab) => {
        //     tab != tabs[currTab] ? tab.style.display = 'block' : tab.style.display = 'none';
        // })
        
        tabs[currTab].style.display = 'none';
        currTab += n;
    
        if(currTab >= tabs.length) {
            document.querySelector('.info-form').submit();
            return false;
        }
    
        showTab(currTab);
    }

    try{
        // controle avec les boutons
        document.querySelector('#prevBtn').addEventListener('click', () => { nextPrev(-1) });
        document.querySelector('#nextBtn').addEventListener('click', () => { nextPrev(1) });
        
        // controle avec le clavier
        document.addEventListener('keydown', (e) => {
            if(e.key == 'ArrowLeft') { nextPrev(-1); }
            if(e.key == 'ArrowRight' || e.key == "Enter") { nextPrev(1); }
        });

        document.querySelector('#register').addEventListener('keydown', (e) => {
            if(e.key == 'Enter') { e.preventDefault(); }
        })
    }
    catch(e) {
        console.log(e);
    }

});