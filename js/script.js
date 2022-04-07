const textDispay = document.querySelector('.texto-dinamico')
const frases = ['Dynamic', 'Efficient', 'Safe', 'Innovative']
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

        let currentPage = window.location.href;
        let currentPagePaths = currentPage.split('/');
        if(e.currentTarget.querySelector('.titulo').innerText == 'Español') {
            if(currentPagePaths[currentPagePaths.length - 2] == 'en') {
                currentPagePaths.splice(currentPagePaths.length - 2,1);
                currentPage = currentPagePaths.join('/')
            }
            window.location.href=currentPage;
        }else {
            if(currentPagePaths[currentPagePaths.length - 2] != 'en') {
                currentPagePaths.splice(currentPagePaths.length - 1,0,'en');
                currentPage = currentPagePaths.join('/')
            }
            window.location.href=currentPage;
        }
    });
});

select.addEventListener('click', (e) => {
    select.classList.add('active');
    idiomas.classList.add('active');
    e.stopPropagation();
});

document.body.addEventListener('click', () => {
    select.classList.remove('active');
    idiomas.classList.remove('active');
});


