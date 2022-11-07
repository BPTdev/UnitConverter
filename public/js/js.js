document.addEventListener('DOMContentLoaded', init);

function init() {
    fonts = ["neon","avengers","bttf","christmas","cs","squids","spaceF","spooky","starcraft","starjedi","tesla","transformers","valorant"];
    fonttoapply = "neon";
    sessionStorage.setItem("playaudio", "false");
    bars = document.getElementById('bars');
    cross = document.getElementById('cross');
    menu = document.getElementById('menu');
    bars.addEventListener('click', menuOpen)
    cross.addEventListener('click', menuClose)


    //universal stuff
    toggle_universal = document.getElementById('toggle-universal');
    if (localStorage.getItem("playaudio")==="true") {
        toggle_universal.checked = true;
    }
    toggle_universal.addEventListener('change',universal)

    //font stuff
    toggle_font = document.getElementById('toggle-font');
    toggle_font.addEventListener('change',randomfonts)
    if (localStorage.getItem("randomfont")==="true") {
        toggle_font.checked = true;
        console.log("random font")
        //get a random element of the fonts array
        fonttoapply = fonts[Math.floor(Math.random()*fonts.length)]
    }
    document.body.classList.add(fonttoapply);




    //colors stuff
    toggle_colors = document.getElementById('toggle-colors');
    toggle_colors.addEventListener('change',randomcolors)
    if (localStorage.getItem("randomcolors")==="true") {
        toggle_colors.checked = true;
        console.log("Random Colors");


    }

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
    if (localStorage.getItem("randomfont")==="true"){
        localStorage.setItem("randomfont", "false");

    }else{
        localStorage.setItem("randomfont", "true");
    }
    window.location.reload();
}
function randomcolors(){
    if (localStorage.getItem("randomcolors")==="true"){
        localStorage.setItem("randomcolors", "false");

    }else{
        localStorage.setItem("randomcolors", "true");
    }
    document.getElementById("formsColors").submit();
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
