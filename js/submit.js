"use strict"

const validate = (value, type) => {
    let regex, response

    switch (type) {
        case 'text':
            regex = /^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/i
            response = {
                validation: regex.test(value),
                message: 'Solo letras'
            }
            if(regex.test(value) && value.length <= 2) {
                response.validation = false
                response.message = 'Debe usar más de dos caracteres'
            }
            return response
        case 'email':
            regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
            response = {
                validation: regex.test(value),
                message: 'Correo no permitido'
            }
            return response
        case 'tel':
            regex = /^([+|#][0-9])+(\s*[0-9]*){8}$/
            response = {
                validation: regex.test(value),
                message: 'Solo un numero permitido'
            }
            return response
        case 'select-one':
            response = {
                validation: value ? true: false,
                message: 'Debe seleccionar una opcion'
            }
            return response
        case 'password':
            response = {
                validation: true,
                message: 'contraseña'
            }
            return response
        default:
            return false
    }
    
}

const isEmpty = (value) => {
    return value === ''
}

const clearForm = (form) => {

    for(let i = 0; i < form.length; i++) {
        let field = form[i]
         if(field.type != 'submit') { 
            $(field).removeClass('input--visible input--sussess')
            field.value = ''
         } 
    }
}


const $formSignin = document.getElementById("form-signin");
const $formNewletter = document.getElementById("form-newletter");
const $formContact = document.getElementById("form-contact");

$formSignin.addEventListener('submit', async (e) => {
    e.preventDefault()
    const data = new FormData($formSignin)

    let formSize = e.target.length - 1, emptyFileds = [], validateFields = []

    for (let i = 0; i < e.target.length; i++) {

        let field = e.target[i]
        console.log(field.type)
        
        $(field).removeClass('input--visible input--sussess input--danger input--warning')

        if (field.type == 'radio') formSize = formSize - 1
        if (field.type == 'textarea') formSize = formSize - 1
        if (field.type == 'hidden') formSize = formSize - 1

        if(field.type != 'submit' && field.type != 'radio' && field.type != 'textarea' && field.type != 'hidden') {
            $(field).next().click(()=>{
                field.focus()
            })

            if (!(field.value === '')) {
                $(field).removeClass('input--visible input--warning')
                $(field).next().text('')
                emptyFileds.push(field.value)
                
                let res = validate(field.value, field.type)

                console.log(res);

                if(res.validation) {
                    $(field).addClass('input--visible input--sussess')
                    $(field).next().text('')
                    validateFields.push(field.value)
                } else {
                    $(field).addClass('input--visible input--danger')
                    $(field).next().text(res.message)
                }
                
            } else {
                $(field).addClass('input--visible input--warning')
                $(field).next().text('Campo requerido')
            } 
        }
    }

    if( formSize === emptyFileds.length && formSize === validateFields.length) {
        document.getElementById("form-signin").submit();
        return true
    } else {
        return false
    }
})

$formNewletter.addEventListener('submit', async (e) => {
    e.preventDefault()
    const data = new FormData($formSignin)

    let formSize = e.target.length - 1, emptyFileds = [], validateFields = []

    for (let i = 0; i < e.target.length; i++) {

        let field = e.target[i]
        console.log(field.type)
        
        $(field).removeClass('input--visible input--sussess input--danger input--warning')

        if (field.type == 'radio') formSize = formSize - 1
        if (field.type == 'textarea') formSize = formSize - 1
        if (field.type == 'hidden') formSize = formSize - 1

        if(field.type != 'submit' && field.type != 'radio' && field.type != 'textarea' && field.type != 'hidden') {
            $(field).next().click(()=>{
                field.focus()
            })

            if (!(field.value === '')) {
                $(field).removeClass('input--visible input--warning')
                $(field).next().text('')
                emptyFileds.push(field.value)
                
                let res = validate(field.value, field.type)

                console.log(res);

                if(res.validation) {
                    $(field).addClass('input--visible input--sussess')
                    $(field).next().text('')
                    validateFields.push(field.value)
                } else {
                    $(field).addClass('input--visible input--danger')
                    $(field).next().text(res.message)
                }
                
            } else {
                $(field).addClass('input--visible input--warning')
                $(field).next().text('Campo requerido')
            } 
        }
    }

    if( formSize === emptyFileds.length && formSize === validateFields.length) {
        //document.getElementById("form-newletter").submit();
        clearForm($formNewletter)
        addMessage('Formulario enviado', 'sussess')
        return true
    } else {
        return false
    }
})


$formContact.addEventListener('submit', async (e) => {
    e.preventDefault()
    const data = new FormData($formSignin)

    let formSize = e.target.length - 1, emptyFileds = [], validateFields = []

    for (let i = 0; i < e.target.length; i++) {

        let field = e.target[i]
        console.log(field.type)
        
        $(field).removeClass('input--visible input--sussess input--danger input--warning')

        if (field.type == 'radio') formSize = formSize - 1
        if (field.type == 'textarea') formSize = formSize - 1
        if (field.type == 'hidden') formSize = formSize - 1

        if(field.type != 'submit' && field.type != 'radio' && field.type != 'textarea' && field.type != 'hidden') {
            $(field).next().click(()=>{
                field.focus()
            })

            if (!(field.value === '')) {
                $(field).removeClass('input--visible input--warning')
                $(field).next().text('')
                emptyFileds.push(field.value)
                
                let res = validate(field.value, field.type)

                console.log(res);

                if(res.validation) {
                    $(field).addClass('input--visible input--sussess')
                    $(field).next().text('')
                    validateFields.push(field.value)
                } else {
                    $(field).addClass('input--visible input--danger')
                    $(field).next().text(res.message)
                }
                
            } else {
                $(field).addClass('input--visible input--warning')
                $(field).next().text('Campo requerido')
            } 
        }
    }

    if( formSize === emptyFileds.length && formSize === validateFields.length) {
        //document.getElementById("form-contact").submit();
        clearForm($formContact)
        addMessage('Formulario enviado', 'sussess')
        return true
    } else {
        return false
    }
})