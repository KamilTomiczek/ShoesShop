function dropdown(){
    document.querySelector(".drop-down").classList.toggle("open")
}

imgS = document.querySelectorAll(".sml")

for (let i = 0; i < imgS.length; i++) {
    imgS[i].addEventListener("mouseover", function() {
        imgS[i].closest(".img").children[0].src = imgS[i].src
    });
}