var lImages = []

// window.onclick = function(event) {
//     if (event.target.className === "animate formContent") {
//       Close();
//     }
// }

function changeImage(index){
    console.log(index)
    document.getElementById("idImgPopup").src = "../../" + lImages[index]["folder"] + lImages[index]["nomFichierAssoc"] ;
    document.getElementById("prev").onclick = function () {changeImage(parseInt(index) - 1)}
    document.getElementById("next").onclick = function() {changeImage(parseInt(index) + 1)}
}
function showPopup(index){
    changeImage(index)
    document.getElementById("idPopup").style.display = "block";
}

function Close(){
    document.getElementById("idPopup").style.display = "none";
}
function setArrayImg(arr){
    lImages = arr
}


