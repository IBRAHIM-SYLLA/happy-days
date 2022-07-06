document.addEventListener('DOMContentLoaded', () => {

        let root;
        
        if(window.location.href.indexOf("index.php") > -1) {
            root = "./Libraries/";
        }
        else {
            root = "./";
        }
    
        let slide = new Array(
            root +'Style/Images/Slider/1.png', 
            root +'Style/Images/Slider/2.png', 
            root +'Style/Images/Slider/3.png'
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

    btns.forEach((btn) => {

        btn.addEventListener('click', () => {
            const offset = btn.id === "next" ? 1 : -1;
            const slides = btn
                .closest('[data-carousel]')
                .querySelector('[data-slides]');
            const activeSlide = slides.querySelector('[data-active]');

            let newIndex = [...slides.children].indexOf(activeSlide) + offset;

            if(newIndex < 0) newIndex = slides.children.length - 1;
            if(newIndex >= slides.children.length) newIndex = 0;

            slides.children[newIndex].dataset.active = true;
            delete activeSlide.dataset.active;
        })
    })
})
    
