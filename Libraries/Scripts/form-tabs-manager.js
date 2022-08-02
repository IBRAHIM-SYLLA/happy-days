document.addEventListener('DOMContentLoaded', () => {

    // le nombre d'onglets / d'étapes
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
        
        tabs[n].className.includes('final-step') ? tabs[n].style.display = 'flex' : tabs[n].style.display = 'block';
        
        steps.forEach((step) => {
            step.className = step.className.replace(" active", "");
        });
        
        steps[n].className += " active";
        
        // pour chaque étape qui n'est pas celle où l'user est, on la cache
        if(document.querySelector('#prevBtn') != null) {
            if (n == 0) {
                document.querySelector("#prevBtn").style.visibility = "hidden";
            } 
            else {
                document.querySelector("#prevBtn").style.visibility = "visible";
            }
        }
    }
    
    function nextPrev(n) {
        
        tabs[currTab].style.display = 'none';
        currTab += n;
    
        if(currTab >= tabs.length) {
            document.querySelector('.info-form').submit();
            return false;
        }
    
        showTab(currTab);
    }

    if(document.querySelector('#prevBtn') != null) {
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
});