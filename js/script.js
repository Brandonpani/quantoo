const textDispay = document.querySelector('.texto-dinamico')
let frases = ['optimal', 'Efficient', 'Safe', 'innovative']
let i = 0
let k = 0
let currentFrase = []


function loop() {

    textDispay.innerHTML = frases[i]
    if (i < frases.length - 1) {
        i++
    } else {
        i = 0
    }
    setTimeout(loop, 1500)
}
if (textDispay != null) {

    loop()
}

const select = document.querySelector('#select');
const idiomas = document.querySelector('#idiomas');
const contenidoSelect = document.querySelector('#contenidoSelect');

document.querySelectorAll('#idiomas > .option').forEach((option) => {
    option.addEventListener('click', (e) => {
        e.preventDefault();
        // console.log('e.currentTarget.innerHTML');
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

select.addEventListener('click', (e) => {
    select.classList.add('active');
    idiomas.classList.add('active');
    e.stopPropagation();
});

document.body.addEventListener('click', () => {
    select.classList.remove('active');
    idiomas.classList.remove('active');
});





const subMenu = document.querySelectorAll('.nav-link').forEach((menu) => {
    menu.addEventListener('click', (e) => {
        menu.classList.toggle('active');
    });

});

// modulos

const selectMenu = document.querySelector('.selectMenu');
const menu = document.querySelector('.menuWrapper');

function activateMenu() {
    selectMenu.addEventListener("click", () => {
        selectMenu.nextElementSibling.classList.toggle("active");
        selectMenu.lastElementChild.classList.toggle("rotate")
    })
    // document.body.addEventListener('click', () => {
    //     selectMenu.nextElementSibling.classList.remove("active");
    //     selectMenu.lastElementChild.classList.remove("rotate")
    //     console.log(selectMenu);
    // });
    modulos()
}
activateMenu();

function modulos() {
    document.querySelectorAll(".modulo").forEach((modulo) => {
        modulo.addEventListener("click", () => {
            let moduloToActivate = modulo.dataset.modulo;
            let moduloContenido = modulo.innerHTML;


            let SelectedMenu = document.querySelector('.selectMenu .selected');
            SelectedMenu.innerHTML = moduloContenido;
            SelectedMenu.dataset.forModulo = moduloToActivate;

            document.querySelectorAll(".modulo").forEach((m) => {
                m.classList.remove('active');
            })
            modulo.classList.add('active');


            if (window.innerWidth <= 1025) {
                selectMenu.nextElementSibling.classList.remove("active");
                selectMenu.lastElementChild.classList.remove("rotate");
            }
            document.querySelectorAll('.modulosContainer > div').forEach((m) => {
                m.classList.remove('active');
            })
            let infoModuloActivado = document.querySelector('.modulosContainer > [data-contenido="' + moduloToActivate + '"]')
            infoModuloActivado.classList.add('active');
            document.addEventListener('clik', (n) => {
                selectMenu.nextElementSibling.classList.remove("active");
            })

        })
    })
    resize();
}
function resize() {
    if (window.innerWidth >= 1025) {
        menu.classList.add('active');
    } else {
        menu.classList.remove('active');
    }
}
window.onresize = resize;


document.querySelectorAll('.descripcionModulo').forEach((descripcionModulo) => {
    descripcionModulo.addEventListener('click', () => {
        descripcionModulo.classList.toggle('collapsed');
    })
});