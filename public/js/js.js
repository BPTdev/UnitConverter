document.addEventListener('DOMContentLoaded', init);

function init() {
    bars = document.getElementById('bars');
    cross = document.getElementById('cross');
    menu = document.getElementById('menu');

    bars.addEventListener('click', menuOpen)
    cross.addEventListener('click', menuClose)
}

function menuOpen() {
    //remove the hidden class to menu element
    menu.classList.remove('menu');
}

function menuClose() {

    //add the hidden class from menu element
    menu.classList.add('menu');
}