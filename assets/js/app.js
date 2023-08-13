let toggle = document.getElementById("toggle");
let aside  = document.getElementById('nav-column');
let newTodo = document.getElementById("new");
let newList = document.getElementById("create");


function showNav() {
    aside.style.display = 'block';
    aside.style.width = '100%'
    aside.style.height = '100%'
    aside.style.backgroundColor = 'white'
    aside.style.zIndex = 1;
    document.getElementById('close').style.display = 'inline'
    document.getElementById('header').style.zIndex = -1;
    console.log('Hello World');
}

function closeNav(type) {
    type.style.display = 'none';
    document.getElementById('header').style.zIndex = 1;
}

function create() {
    newList.style.display = 'block';
    // body.style.backgroundColor = 'white'
    newList.style.zIndex = 1;
    // document.getElementById('create').style.display = 'inline'
    document.getElementById('header').style.zIndex = -1;
    console.log('Hello World');
}
