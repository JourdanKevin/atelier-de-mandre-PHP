var lImages = []

function changeImage(index){
    index = index < 0 ? lImages.length -1 : index > lImages.length -1 ? 0 : index
    document.getElementById("writteIndex").textContent = parseInt(index) + parseInt(1);
    document.getElementById("idImgPopup").src = "/public/" + lImages[index]["folder"] + lImages[index]["nomFichierAssoc"] ;
    document.getElementById("prev").onclick = function () {changeImage(parseInt(index) - 1)}
    document.getElementById("next").onclick = function() {changeImage(parseInt(index) + 1)}
}
function showPopup(id,index = false){
    if (index == "video"){
        document.getElementById("video").play()
        document.getElementById("video").requestFullscreen()
    }
    else if (index){
        changeImage(index)
    }
    document.getElementById(id).style.display = "flex";
}

function Close(id,index = false){
    if (index == "video"){
        document.getElementById("video").pause()
    }
    document.getElementById(id).style.display = "none";
}
function setArrayImg(arr){
    lImages = arr
}


function startChangeImageAccueil(){
    var imageAccueil = {
        index : 0,
        0 : "Photo_page_daccueil.jpg",
        1 : "Image2BleuAccueil.png",
    }
    setInterval(() => {
        id = document.getElementById("imageAccueil")
        url = id.src.split("/")
        imageAccueil["index"] = imageAccueil["index"] == 0 ? 1 : 0
        url[url.length - 1] = imageAccueil[imageAccueil["index"]]
        id.src = url.join("/")
    }, 5000);
}


