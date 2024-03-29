document.addEventListener('DOMContentLoaded', () => {

    // const prevBtn = document.querySelector('#prev');
    // const nextBtn = document.querySelector('#next');
    
    // prevBtn.addEventListener('click', changeSlide(-1));
    // nextBtn.addEventListener('click', changeSlide(1));
    
    // function changeSlide(sens) {
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
    
    //     let nb = 0;
    //     nb += sens;
        
    //     if(nb < 0) {
    //         nb = slide.length - 1;
    //     }
    //     if(nb > slide.length - 1) {
    //         nb = 0;
    //     }
    
    //     document.querySelector('.left').src  = slide[nb-1];
    //     document.querySelector('.front').src = slide[nb];
    //     document.querySelector('.right').src = slide[nb+1];
    // }


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
    
