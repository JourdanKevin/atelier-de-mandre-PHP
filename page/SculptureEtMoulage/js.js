window.onclick = function(event) {
    if (event.target.className === "animate formContent") {
      Close();
    }
}
function showPopup(nameImg){
    document.getElementById("idImgPopup").src = nameImg;
    document.getElementById("idPopup").style.display = "block";
}

function Close(){
    document.getElementById("idPopup").style.display = "none";
}



