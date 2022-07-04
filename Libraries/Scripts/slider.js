let slide = new Array('1.png', '2.png', '3.png');
let nb = 0;

function changeSlide(sens) {
    nb += sens;
    
    if(nb < 0) {
        nb = slide.length - 1;
    }
    if(nb > slide.length - 1) {
        nb = 0;
    }

    document.querySelector('.slider-img-front').src = slide[nb];
}