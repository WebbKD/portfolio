var openBtn = document.querySelector("#open");
var overlayNav = document.querySelector("#nav");
var closeBtn = document.querySelector("#close");


openBtn.addEventListener("click", function(){
    openBtn.style.display = "none";
    overlayNav.style.width = "100%";
});

closeBtn.addEventListener("click", function(){
    openBtn.style.display = "block";
    overlayNav.style.width = "0%";
});

