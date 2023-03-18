<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вышивка</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/uicons-brands.css">
	<link rel="stylesheet" href="css/uicons-solid-rounded.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
	include 'header.php';
 ?>

<!-- Первая секция Главная -->

	<section class="main">
		<div class="container">

			<div class="row">

				<div class="col-5">
					<div class="main-wrapper">
						<h1 class="main__header">Вышивка на заказ!</h1>
						<p class="main__subtitle">По вашему макету или картинке!</p>
					</div>
				</div>

				<div class="col-7">
					<div class="main-logo">
						<img src="img/logo.png" alt="логотип" class="main-logo-img">
					</div>
				</div>
				
			</div>

		</div>
	</section>


<?php 
	include 'footer.php';
 ?>

<!-- Модальное окно -->
	<div class="popup">
		<div class="popup-dialog">
			<div class="popup-content">
				<button class="popup-close">&times;</button>
				<h3 class="popup-header">Оставьте заявку <br> и мы свяжемся с Вами</h3>
				<div class="popup-form-block">
					<form action="#" class="popup-form">

						<div class="input-box">
							<input type="text" id="name" class="popup-form-input" required><i class="fi popup-form__fi fi-sr-picpeople-filled"></i>
							<label for="name" class="popup-form-label">Ваше имя</label>
						</div>

						<div class="input-box">
							<input type="number" id="phone" class="popup-form-input" required><i class="fi popup-form__fi fi-sr-call-incoming"></i>
							<label for="phone" class="popup-form-label">Ваш телефон</label>
						</div>

						<button class="popup-form-btn social__btn">Отправить</button>

					</form>
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery-3.6.3.min.js"></script>

<!-- модальное окно -->
<script>
	$(document).ready(function(){
				// модальное окно ОСТАВИТЬ ЗАЯВКУ
		$('.popup-btn').on('click', function(event) {
			event.preventDefault();
			$('.popup').fadeIn('slow/900/fast', function() {
			});
			$('body').toggleClass('no-scroll');
		});
		$('.popup-close').on('click', function(event) {
			event.preventDefault();
			$('.popup').fadeOut('slow/400/fast', function() {
			});
			$('body').toggleClass('no-scroll');
		});
	});

</script>
</body>
</html>
