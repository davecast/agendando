window.onscroll = function() {
	onScrollAction()
}

var header = document.getElementById('header')
const $headerMenu = document.getElementById('header__menu')

function onScrollAction () {
	if (window.pageYOffset >= 100) {
		header.classList.add("header-fixed")
	} else {
		header.classList.remove("header-fixed")
	}
}

const $burguerMenu = document.getElementById('burguer')

$burguerMenu.addEventListener('click', (e) => {
	$burguerMenu.classList.toggle('burguer__active')
	$headerMenu.classList.toggle('header__menu__active');
})