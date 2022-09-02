// const textDisplay = document.querySelector('.texto-dinamico');
frases = ['Óptima', 'Eficiente', 'Segura', 'Innovadora']
i = 0
k = 0
currentFrase = []


function loop() {

    textDisplay.innerHTML = frases[i]
    if (i < frases.length - 1) {
        i++
    } else {
        i = 0
    }
    setTimeout(loop, 1500)
}
if (textDisplay != null) {

    loop()
};

document.querySelectorAll('#idiomas > .option').forEach((option) => {
    option.addEventListener('click', (e) => {
        e.preventDefault();
        contenidoSelect.innerHTML = e.currentTarget.innerHTML;
        idiomas.classList.toggle('active');
        select.classList.toggle('active');

        let currentPage = window.location.href;
        let currentPagePaths = currentPage.split('/');
        if (e.currentTarget.querySelector('.titulo').innerText == 'Español') {
            if (currentPagePaths[currentPagePaths.length - 2] == 'en') {
                currentPagePaths.splice(currentPagePaths.length - 2, 1);
                currentPage = currentPagePaths.join('/')
            }
            window.location.href = currentPage;
        } else {
            if (currentPagePaths[currentPagePaths.length - 2] != 'en') {
                currentPagePaths.splice(currentPagePaths.length - 1, 0, 'en');
                currentPage = currentPagePaths.join('/')
            }
            window.location.href = currentPage;
        }
    });
});

// select.addEventListener('click', (e) => {
//     select.classList.add('active');
//     idiomas.classList.add('active');
//     e.stopPropagation();
// });

// document.body.addEventListener('click', () => {
//     select.classList.remove('active');
//     idiomas.classList.remove('active');
// });


