document.addEventListener('DOMContentLoaded', init);

function init() {
    sessionStorage.setItem("playaudio", "false");
    bars = document.getElementById('bars');
    cross = document.getElementById('cross');
    menu = document.getElementById('menu');
    toggle_universal = document.getElementById('toggle-universal');

    bars.addEventListener('click', menuOpenClose)
    cross.addEventListener('click', menuOpenClose)
    toggle_universal.addEventListener('change',universal)
}
function universal() {
    console.log("Universal Toggled")
    menu.classList.toggle('menu-transition');
    menu.classList.toggle('menu-transition-universal');
    if (sessionStorage.getItem("playaudio")==="true"){
        sessionStorage.setItem("playaudio", "false");
    }else{
        sessionStorage.setItem("playaudio", "true");
    }

}
function menuOpenClose() {

    //toggle the menu class to menu element
    menu.classList.toggle('menu');
    if (sessionStorage.getItem("playaudio")==="true"){
        console.log(sessionStorage.getItem("playaudio"));
        var audio = new Audio('js/univers/Universal_Intro.mp3');
        audio.play();
    }

}
