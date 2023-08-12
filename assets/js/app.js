let toggle = document.getElementById("toggle");
let aside  = document.getElementById('nav-column');



function showNav() {
    aside.style.display = 'block';
    aside.style.width = '100%'
    aside.style.height = '100%'
    aside.style.backgroundColor = 'grey'
    aside.style.zIndex = 1;
    document.getElementById('close').style.display = 'inline'
    document.getElementById('header').style.zIndex = -1;
    console.log('Hello World');
}

function closeNav() {
    aside.style.display = 'none';
}