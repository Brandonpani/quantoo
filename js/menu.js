document.getElementsByClassName("menu-ham")[0].addEventListener("click",function(evt){
    document.getElementsByClassName("wrapper")[0].classList.toggle("open");
    var imagen = document.getElementsByClassName("menu__ham")[0];
    var src = imagen.getAttribute("src");
    imagen.setAttribute("src",imagen.getAttribute("data-src"));
    imagen.setAttribute("data-src",src);
})
document.getElementsByTagName("body")[0].addEventListener("click",function(evt){

})



