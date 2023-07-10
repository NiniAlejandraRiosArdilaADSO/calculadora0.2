//Formulario y boton
let formulario = document.getElementById('formulario');
let btnEnviar = document.getElementById('btnenviar');

let numero01 = document.getElementById('numero01')
let numero02 = document.getElementById('numero02')


let soloNumeros = (e) => {
    // validamos que el keyCode corresponda a las teclas de los números
    if ((e.keyCode < 48 || e.keyCode > 57) && e.keyCode) {
        e.preventDefault()
    }
}

let enviarFormulario = formulario => {
    console.log(formulario)
    formulario.submit()
}

const validacion = (e) => {
    e.preventDefault()
    if (numero01.value === "") {
        alert('Por favor, escribe primer numero')
        numero01.focus()
        return false
    }
    if (numero02.value === "") {
        alert('Por favor, escribe segundo numero')
        numero02.focus()
        return false
    }

    
    enviarFormulario(formulario)
}

numero01.addEventListener('keypress', soloNumeros)
numero02.addEventListener('keypress', soloNumeros)


btnEnviar.addEventListener('click', validacion)