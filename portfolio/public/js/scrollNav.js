var nav = document.querySelector("nav");
window.addEventListener("scroll", function(){
    if(window.pageYOffset > 100){
        nav.classList.remove("transparent");
    }else{
        
        nav.classList.add("transparent");
    }
});