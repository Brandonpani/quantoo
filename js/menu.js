document.getElementsByClassName("menu-ham")[0].addEventListener("click",function(evt){
    document.getElementsByClassName("wrapper")[0].classList.toggle("open");
    var imagen = document.getElementsByClassName("menu__ham")[0];
    var src = imagen.getAttribute("src");
    imagen.setAttribute("src",imagen.getAttribute("data-src"));
    imagen.setAttribute("data-src",src);
})
document.getElementsByTagName("body")[0].addEventListener("click",function(evt){

})



const body = document.body;

let lastScroll = 0;

window.addEventListener("scroll", () => {

  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove("scroll-down");
    body.classList.add("scroll-up");
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
    body.classList.remove("scroll-up");
    body.classList.add("scroll-down");
  } else if (
    currentScroll < lastScroll &&
    body.classList.contains("scroll-down")
  ) {
    body.classList.remove("scroll-down");
    body.classList.add("scroll-up");
  }
  if (Math.abs(currentScroll - lastScroll) > 150) {
    lastScroll = currentScroll;
  }
});
