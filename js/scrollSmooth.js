"use strict"

const Smooth = (e) => {
  e.preventDefault();

  $('html, body').animate({
      scrollTop: $(e.target.hash).offset().top - 80
  }, 600);
}

$('.header__link').click((e)=>{
  	Smooth(e)
})

$('.link__page').click((e)=>{
	Smooth(e)
})