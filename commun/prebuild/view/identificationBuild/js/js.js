current = "";
popup = "";
noAnimation = "";

function reloadScrollBars() {
    document.documentElement.style.overflow = 'auto';
}

function unloadScrollBars() {
    document.documentElement.style.overflow = 'hidden';
}

function setAnimation(value){
    noAnimation = value;
}

function setPopup(value){
    popup = value;
}

function giveImg(src){
    document.getElementById("icon").src=src;
}

function change(change){
    
    if (popup)
        document.getElementById(change).style.position = "fixed";
    if (!noAnimation){
        unloadScrollBars();
        document.getElementById(current).classList.remove("fadeInDown");
        document.getElementById(current).classList.add("fade-out");
        animated = document.querySelector('.fade-out');
        animated.addEventListener("animationend", animationEvent);

        function animationEvent(){
                document.getElementById(current).style.display = "none";
                document.getElementById(change).style.display = "flex";
                document.getElementById(current).classList.add("fadeInDown");
                document.getElementById(current).classList.remove("fade-out");                   
                current = change;
                reloadScrollBars();
                animated.removeEventListener("animationend", animationEvent);
        }
    }
    else{
        document.getElementById(current).style.display = "none";
        document.getElementById(change).style.display = "flex";
        current = change;
    }
    
}
  
function Close(){
    document.getElementById(current).style.display = "none";
}

function show(namediv){
    console.log(namediv);
    document.getElementById(namediv).style.display = "flex";    
    if (popup)
        document.getElementById(namediv).style.position = "fixed";
    if (noAnimation){
        document.getElementById("login").classList.remove("fadeInDown");
        document.getElementById("inscription").classList.remove("fadeInDown");
        document.getElementById("oubli").classList.remove("fadeInDown");
    }

    current = namediv
}