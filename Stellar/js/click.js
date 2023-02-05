// Анимация нажатия на кнопку меню
$('.mini-nav-btn').on('click', function(e){
	e.preventDefault;
	$(this).toggleClass('mini-nav-btn-active');
	$('.mini-nav').toggleClass('mini-nav-active');
});
// Анимация по нажатию на меню
// на ссылку и меню уходит в кнопку
$('.mini-nav-link').on('click', function(e) {
	$('.mini-nav').toggleClass('mini-nav-active');
	$('.mini-nav-btn').toggleClass('mini-nav-btn-active');
});
