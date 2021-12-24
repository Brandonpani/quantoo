document.getElementsByClassName("menu-ham")[0].addEventListener("click",function(evt){
    document.getElementsByClassName("wrapper")[0].classList.toggle("open");
    var imagen = document.getElementsByClassName("menu__ham")[0];
    var src = imagen.getAttribute("src");
    imagen.setAttribute("src",imagen.getAttribute("data-src"));
    imagen.setAttribute("data-src",src);
})
document.getElementsByTagName("body")[0].addEventListener("click",function(evt){

    if(!evt.target.classList.contains("menu-ham") && !evt.target.classList.contains("menu__ham")){
        document.getElementsByClassName("wrapper")[0].classList.remove("open");
        document.getElementsByClassName("menu__ham")[0].setAttribute("src","images/assets/menu-alt-right.svg");
        document.getElementsByClassName("menu__ham")[0].setAttribute("data-src","images/assets/close.svg");

    }

})