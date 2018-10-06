"use strict"

const $overlay = document.getElementById('overlay')
const $modal = document.getElementById('modal')
const $hideModal = document.getElementById('hide-modal')
const $modalContent = document.getElementById('modal-content')
const $modalSignin = document.getElementById('modal-signin')
const $modalSignup = document.getElementById('modal-signup')

/*function modalTemplate (template, content) {
	let hmtlContent;
	switch(template) {
		case 'signin':
			hmtlContent = `
				
			`
			break;
		case 'signup':
			hmtlContent = `
				
			`
			break;
		default:
			hmtlContent = ''
	}

	const html = document.implementation.createHTMLDocument();

	html.body.innerHTML = hmtlContent;

	return html.body.children[0];
}
*/

function showModal($template) {
	$overlay.classList.add('active')
	$modal.style.animation = 'modalIn .8s forwards'

	if($template === "signin" ) {
		$modalSignin.classList.add('modal--visible')
		$modalSignin.classList.remove('modal--hidden')
		$modalSignup.classList.remove('modal--visible')
		$modalSignup.classList.add('modal--hidden')
	} else if ("signup") {
		$modalSignup.classList.add('modal--visible')
		$modalSignup.classList.remove('modal--hidden')
		$modalSignin.classList.add('modal--hidden')

		$modalSignup.classList.add('modal--visible')
		$modalSignup.classList.remove('modal--hidden')
		$modalSignin.classList.remove('modal--visible')
		$modalSignin.classList.add('modal--hidden')

	}
/*
	const $modalTemplate = modalTemplate($template)
	$modalContent.innerHTML = $modalTemplate.outerHTML*/
}

function hideModal() {
	$overlay.classList.add('fadeIn--overlay')
	$modal.style.animation = 'modalOut .8s forwards'

	setTimeout(()=>{
		$overlay.classList.remove('active', 'fadeIn--overlay')
	}, 800)
}

let $modalOpen = document.querySelectorAll('.modal__open')

$modalOpen.forEach((btnModal) => {
	btnModal.addEventListener('click', (e) => {
		e.preventDefault()
		showModal(e.target.dataset.do)
	})
})

$hideModal.addEventListener('click', (e) => {
	hideModal()
})