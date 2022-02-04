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

const select = document.querySelector('#select');
const idiomas = document.querySelector('#idiomas');
const contenidoSelect = document.querySelector('#contenidoSelect');


// function clickLang(e) {
//     if(this.checked){
//         window.location.href="/index.html";
//     }else {
//         window.location.href="/en/index.html";
//     }
// };

document.querySelectorAll('#idiomas > .option').forEach((option) => {
    option.addEventListener('click', (e) => {
        e.preventDefault();
        // console.log('e.currentTarget.innerHTML');
        contenidoSelect.innerHTML = e.currentTarget.innerHTML;
        idiomas.classList.toggle('active');
        select.classList.toggle('active');

        if(e.currentTarget.querySelector('.titulo').innerText == 'Español') {
                    window.location.href="/index.html";
                }else {
                    window.location.href="/en/index.html";
                }

        console.log(e.currentTarget.querySelector('.titulo').innerText);
    });
});

select.addEventListener('click', () => {
    select.classList.toggle('active');
    idiomas.classList.toggle('active');
});