let toggle = document.getElementById("toggle");
let aside  = document.getElementById('nav-column');
let newTodo = document.getElementById("new");
let newList = document.getElementById("create");
let updateTodo = document.getElementById("update");
let deleteList = document.getElementById("delete");

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

function create() {
    newList.style.display = 'block';
    newList.style.zIndex = 1;
    document.getElementById('header').style.zIndex = -1;
    console.log('Hello World');
}

function update() {
    updateTodo.style.display = 'block';
    updateTodo.style.zIndex = 1;
    document.getElementById('header').style.zIndex = -1;
    console.log('Hello World');
}

function deleteTodo() {
    deleteList.style.display = 'block';
    deleteList.style.zIndex = 1;
    document.getElementById('header').style.zIndex = -1;
    console.log('Hello World');
}


function closeNav(type) {
    type.style.display = 'none';
    document.getElementById('header').style.zIndex = 1;
}