document.addEventListener('DOMContentLoaded', init);

function init() {
    bars = document.getElementById('bars');
    cross = document.getElementById('cross');
    menu = document.getElementById('menu');

    bars.addEventListener('click', menuOpenClose)
    cross.addEventListener('click', menuOpenClose)
}

function menuOpenClose() {
    //toggle the menu class to menu element
    menu.classList.toggle('menu');
}
