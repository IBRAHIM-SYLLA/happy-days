function showNav() {
    let x = document.getElementById('myLinks');
    
    if(x.style.display === 'flex') {
        x.style.display = 'none';
    }
    else {
        x.style.display = 'flex';
    }

    let y = document.querySelector('#burger-btn');
    y.style.transform == '' ? y.style.transform = 'rotateZ(360deg)' : y.style.transform = '';
}