document.addEventListener('DOMContentLoaded', () => {

        let root;
        let url = window.location.href;
        
        // nous sommes sur la page d'index
        if(url.includes('index.php') || url.endsWith('happy-days/')) {
            root = "./Libraries/";
        }
        else {
            root = "./";
        }
    
        // pour ajouter une image au slider, il faut la renseigner dans l'array
        let slide = new Array(
            root +'Style/Images/Slider/P1014511.png', 
            root +'Style/Images/Slider/2.jpg', 
            root +'Style/Images/Slider/3.jpg',
            root +'Style/Images/Slider/4.jpg',
            root +'Style/Images/Slider/5.jpg'
        );


    const imgCont = document.querySelector('#img-cont');

    for(i = 0; i < slide.length; i++) {
        if(i == 0) {
            imgCont.innerHTML += 
                `<li class='slide' data-active>
                    <img src='${slide[i]}'>
                </li>`;
        }
        else {
            imgCont.innerHTML += 
                `<li class='slide'>
                    <img src='${slide[i]}'>
                </li>`;
        }
    }

    const btns = document.querySelectorAll('.slider-btn');

    // pour chaque bouton cliqué
    btns.forEach((btn) => {

        btn.addEventListener('click', () => {
            // pour savoir si on doit incrémenter ou décrémenter l'index de l'image
            const offset = btn.id === "next" ? 1 : -1;
            const slides = btn
                .closest('[data-carousel]')
                .querySelector('[data-slides]');
            const activeSlide = slides.querySelector('[data-active]');

            let newIndex = [...slides.children].indexOf(activeSlide) + offset;

            // amène l'index à la fin de l'array d'images si l'index est inférieur à 0
            if(newIndex < 0) newIndex = slides.children.length - 1;
            // amène l'index au début de l'array d'images si l'index à dépassé la taille de l'array
            if(newIndex >= slides.children.length) newIndex = 0;

            slides.children[newIndex].dataset.active = true;
            delete activeSlide.dataset.active;
        })
    })
})
    
