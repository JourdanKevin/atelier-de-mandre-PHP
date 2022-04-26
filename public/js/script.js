var lImages = []

function changeImage(index){
    index = index < 0 ? lImages.length -1 : index > lImages.length -1 ? 0 : index
    document.getElementById("writteIndex").textContent = parseInt(index) + parseInt(1);
    document.getElementById("idImgPopup").src = "/AtelierDeMandres/public/" + lImages[index]["folder"] + lImages[index]["nomFichierAssoc"] ;
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

var intervalImage = ""
function startChangeImageAccueil(){
    var imageAccueil = {
        index : 0,
        0 : "Photo_page_daccueil.jpg",
        1 : "Image2BleuAccueil.png",
    }
    intervalImage = setInterval(() => {
        id = document.getElementById("imageAccueil")
        id.className = "fadeOut"
        id.addEventListener("animationend", animationEvent)
        function animationEvent(){
            url = id.src.split("/")
            imageAccueil["index"] = imageAccueil["index"] == 0 ? 1 : 0
            url[url.length - 1] = imageAccueil[imageAccueil["index"]]
            id.className = "fadeIn"
            id.src = url.join("/")
            id.removeEventListener("animationend", animationEvent);
        }
       
    }, 5000);
}

var hActive = ""
var vActive = ""
$(document).on('click', 'a.nav-linkH', function(e){   
    var pageURL=$(this).attr('href');
    history.pushState(null, '',pageURL)
    $.ajax({
        url: pageURL,
        success: function(response){
            var wrapper = $("<div>").append(response)
            // console.log(wrapper)
            
            // console.log(wrapper.find("#menueHorizontal"))
            $('#targetBodyContent').html(wrapper.find("#bodyContent"))
            $('#targetMenueHorizontal').html(wrapper.find("#menueHorizontal"))            
        }    
})
    clearInterval(intervalImage)
    vActive = ""
    e.preventDefault();
})


$(document).on('click', 'a.nav-linkV', function(e){   
    var pageURL=$(this).attr('href');
    activeURL = pageURL.split('/')
    activeURL = activeURL[activeURL.length - 1]
    $(".active.nav-linkV").removeClass("active")
    history.pushState(null, '',pageURL)
    $.ajax({
        url: pageURL,
        success: function(response){
            
            var wrapper = $("<div>").append(response)
            console.log(wrapper.find("script")[2])
            $('#targetContent').html(wrapper.find("#content"))
            $('#targetContent').append(wrapper.find("script")[2])
            $('#'+activeURL+'V').addClass("active")
            $("#vMenue").children("p").text(wrapper.find("#vMenue").children("p").text())     
        }    
})
    clearInterval(intervalImage)
    e.preventDefault();
})


