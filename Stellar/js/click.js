// Анимация нажатия на кнопку меню
$('.mini-nav-btn').on('click', function(e){
	e.preventDefault;
	$('.mini-nav').toggleClass('mini-nav_active');

});

// Анимация по нажатию на меню
// на ссылку и меню уходит в кнопку
$('.mini-nav-link').on('click', function(e) {
	$('.mini-nav').toggleClass('mini-nav_active');
});