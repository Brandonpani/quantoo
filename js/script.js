const textDispay = document.querySelector('.texto-dinamico')
const frases = ['optimal', 'Efficient', 'Safe', 'innovative']
let i = 0
let k = 0
let currentFrase = []


function loop() {
    
    textDispay.innerHTML = frases[i]
    if (i < frases.length -1) {
        i++
    } else {
        i = 0
    }
    setTimeout(loop, 1500)
}
if (textDispay!=null) {

    loop()
}

const checkLang = document.getElementById('lang');
checkLang.addEventListener('click', clickLang);

function clickLang(e) {
    if(this.checked){
        window.location.href="/index.html";
    }else {
        window.location.href="../en/index.html";
    }
}