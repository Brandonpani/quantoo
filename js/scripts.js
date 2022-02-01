const textDispay = document.querySelector('.texto-dinamico')
const frases = ['Optima', 'Eficiente', 'Segura', 'Chingona']
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

// function loop () {
//     textDispay.innerHTML = currentFrase.join('')
    
    
//     if (i < frases.length) {
        
//         if (k <= frases[i].length) {
//            currentFrase.push(frases[i][k])
//            k++
//         }
//         if (k > frases[i].length) {
//           currentFrase = []
//         i++
//         k=0
//         }
        
        
//     }else{
//         i=0
//         k=0
//         currentFrase=[]
//     }

//     setTimeout(loop, 300)
// }
// loop()