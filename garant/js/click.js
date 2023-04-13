// Анимация нажатия на кнопку меню
$('.nav__btn').on('click', function(e){
	e.preventDefault;
	$('.nav').toggleClass('nav_active');
	$('.nav__btn').toggleClass('nav__btn_active');
	$('.nav__span').toggleClass('nav__span_active');
	$('.nav-link').toggleClass('nav-link_active');

});