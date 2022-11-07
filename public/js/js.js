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
    if (localStorage .getItem("playaudio")==="true") {
        toggle_universal.checked = true;
    }
    toggle_universal.addEventListener('change',universal)

    //font stuff
    toggle_font = document.getElementById('toggle-font');
}
//universal stuff
function universal() {
    console.log("Universal Toggled")
    menu.classList.toggle('menu-transition');
    menu.classList.toggle('menu-transition-universal');
    if (localStorage.getItem("playaudio")==="true"){
        menu.classList.add('menu-transition');
        localStorage.setItem("playaudio", "false");

    }else{

        menu.classList.remove('menu-transition-universal');
        localStorage.setItem("playaudio", "true");
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
    if (localStorage.getItem("playaudio")==="true"){
        menu.classList.add('menu-transition-universal');
        console.log(localStorage.getItem("playaudio"));
        var audio = new Audio('js/univers/Universal_Intro.mp3');
        audio.play();
    }

}
function menuClose() {

    //toggle the menu class to menu element
    menu.classList.toggle('menu');

    //universal stuff
    if (localStorage.getItem("playaudio")==="true"){
        console.log(localStorage.getItem("playaudio"));
        var audio = new Audio('js/univers/Universal_Intro_reverse.mp3');
        audio.play();
    }

}
