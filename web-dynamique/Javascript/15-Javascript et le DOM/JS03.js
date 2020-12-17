var img = document.getElementById("ampoule");
img.addEventListener("click", function(){
    if(img.getAttribute("src") == "AmpouleHS.GIF"){
        img.src = "ampouleOK.GIF";
    } else {
        img.src ="ampouleHS.GIF";
    }
});