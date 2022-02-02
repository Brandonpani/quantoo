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
loop()
