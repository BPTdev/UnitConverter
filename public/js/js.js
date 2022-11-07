document.addEventListener('DOMContentLoaded', init);

function init() {
    sessionStorage.setItem("playaudio", "false");
    bars = document.getElementById('bars');
    cross = document.getElementById('cross');
    menu = document.getElementById('menu');
    bars.addEventListener('click', menuOpen)
    cross.addEventListener('click', menuClose)


    //universal stuff
    toggle_universal = document.getElementById('toggle-universal');
    toggle_universal.addEventListener('change',universal)
}
//universal stuff
function universal() {
    console.log("Universal Toggled")
    menu.classList.toggle('menu-transition');
    menu.classList.toggle('menu-transition-universal');
    if (sessionStorage.getItem("playaudio")==="true"){
        sessionStorage.setItem("playaudio", "false");
    }else{

        menu.classList.remove('menu-transition-universal');
        sessionStorage.setItem("playaudio", "true");
        menu.classList.toggle('menu');
    }

}
function randomfonts() {
    fonts = ["neon","avengers","back-to-the-future","christmas","cs","squids","spaceF","spooky","starcraft","starjedi","tesla","transformers","valorant"];
}
function menuOpen() {

    //toggle the menu class to menu element
    menu.classList.toggle('menu');



    //universal stuff
    if (sessionStorage.getItem("playaudio")==="true"){
        menu.classList.add('menu-transition-universal');
        console.log(sessionStorage.getItem("playaudio"));
        var audio = new Audio('js/univers/Universal_Intro.mp3');
        audio.play();
    }

}
function menuClose() {

    //toggle the menu class to menu element
    menu.classList.toggle('menu');

    //universal stuff
    if (sessionStorage.getItem("playaudio")==="true"){
        console.log(sessionStorage.getItem("playaudio"));
        var audio = new Audio('js/univers/Universal_Intro_reverse.mp3');
        audio.play();
    }

}
