<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

<!-- Фавиконки -->
	<link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
	<link rel="manifest" href="img/fav/site.webmanifest">
	<link rel="mask-icon" href="img/fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">

<!-- Заголовок -->
	<title>«Гарант риелтор»</title>

<!-- Ссылки  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">

<!-- Скрипты -->
	<script src="js/jquery-3.6.3.min.js"></script>
	<script src="js/click.js" defer></script>
	<script src="js/bootstrap.js" defer></script>
	<script src="js/slick.min.js"></script>

<!-- Шрифты -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>

<!-- Навигация -->
	<?php 
		include ('nav.php')
	 ?>

<!-- Первая секция main -->
	<section class="main">
		<div class="container">

			<div class="section-header">
				<h2 class="title">«Гарант-Риелтор» —  надежный шаг в будущее!</h2>
				<p class="sub-title">Все сделки с недвижимостью в Краснотурьинске!</p>
			</div>

			<div class="row">
				<form class="form main__form" action="#">
					<input class="form-input main__input" type="search">
					<input class="form-btn" type="submit" value="Найти">
				</form>
			</div>

		</div>
	</section>

<!-- Вторая секция About -->
	<section class="about">
		<div class="container">

			<div class="section-header">
				<h2 class="title">«ГАРАНТ РИЕЛТОР»</h2>
				<p class="about__sub-title">Добро пожаловать на сайт агенство недвижимости «Гарант риелтор»! <br>
					Мы работаем с августа 2005 года!<br> 

					Фирма неоднократно награждалась почётными дипломами, благодарственными письмами в периоды с 2007-2020 года, за вклад в развитие рынка недвижимости и развития малого бизнеса, а также за повышенное внимание, заботу и обслуживание пожилых людей, помощь в организации подарков детям  участников городского отборочного Фестиваля творчества детей.<br><br>

					Взвешенная маркетинговая стратегия и эффективный менеджмент позволяют компании во многом определять пути развития современного рынка недвижимости и задавать стандарты корпоративной культуры. 

					<br> <br>Здесь Вы можете ознакомиться с отзывами о нашей работе и заказать звонок риелтора для консультации!</p>
			</div>
			<row class="col-12">
				<form class="form about__form" action="#">
					<input class="form-input about__input" type="text" name="user_name" placeholder="Ваше имя"> 
					<input class="form-input about__input" type="tel" name="user_tel" placeholder="Ваш телефон"> 
					<input class="form-btn" type="submit" value="Заказать звонок">
				</form>
			</row>

	<!-- Отзывы -->
			<h3 class="title">Отзывы о нашей работе</h3>
		</div>
			<div class="row">
				<div class="col-12">
					<div class="feedbacks">

					  <div class="feedbacks__item">
					  	<div class="row">
					  		<div class="col-5">
					  			<img src="img/3.jpg" alt="Фото отзыва" class="feedbacks__img">
					  		</div>
					  		<div class="col-7">
					  			<h3 class="feedbacks__name">Наталья</h3>
					  			<p class="feedbacks__description">Все прошло успешно! Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.</p>
					  		</div>
					  	</div>
					  </div>
						
					  <div class="feedbacks__item">
					  	<div class="row">
					  		<div class="col-5">
					  			<img src="img/2.jpg" alt="Фото отзыва" class="feedbacks__img">
					  		</div>
					  		<div class="col-7">
					  			<h3 class="feedbacks__name">Александр</h3>
					  			<p class="feedbacks__description">Спасибо вам за помощь Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Инициал сбить буквоград прямо заголовок назад свою он страну, домах!!</p>
					  		</div>
					  	</div>
					  </div>
						
					  <div class="feedbacks__item">
					  	<div class="row">
					  		<div class="col-5">
					  			<img src="img/1.jpg" alt="Фото отзыва" class="feedbacks__img">
					  		</div>
					  		<div class="col-7">
					  			<h3 class="feedbacks__name">Алексей</h3>
					  			<p class="feedbacks__description">Подобрали хорошую, приятную квартиру с низкой ставкой по ипотеке! Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Курсивных, грустный.</p>
					  		</div>
					  	</div>
					  </div>

					</div>
				</div>
			</div>
	</section>

<!-- Третья секция Ads -->
	<section class="ads">
		<div class="container">

			<div class="section-header">
				<h2 class="title">Доска объявлений</h2>
			</div>

			<div class="row">
				<div class="col-3">
					<div class="ads__block">
						<a class="ads__link" href="#">
							<div class="ads__slider-img">
								<img class="ads__img" src="img/home/01.jpeg" alt="">
								<img class="ads__img" src="img/home/02.jpeg" alt="">
								<img class="ads__img" src="img/home/03.png" alt="">
								<img class="ads__img" src="img/home/04.jpeg" alt="">
							</div>
							<p class="ads__adress">ул. Мира, д. 47, кв. 25</p>
							<h4 class="ads__value">1-к квартира, 3/3 этаж, 36,3 м<sup>2</sup></h4>
							<p class="ads__price">850 000 ₽</p>
							<button class="form-btn ads__btn">Забронировать</button>
						</a>
					</div>
				</div>

				<div class="col-3">
					<div class="ads__block">
						<a class="ads__link" href="#">
							<div class="ads__slider-img">
								<img class="ads__img" src="img/home/01.jpeg" alt="">
								<img class="ads__img" src="img/home/02.jpeg" alt="">
								<img class="ads__img" src="img/home/03.png" alt="">
								<img class="ads__img" src="img/home/04.jpeg" alt="">
							</div>
							<p class="ads__adress">ул. Мира, д. 47, кв. 25</p>
							<h4 class="ads__value">1-к квартира, 3/3 этаж, 36,3 м<sup>2</sup></h4>
							<p class="ads__price">850 000 ₽</p>
							<button class="form-btn ads__btn">Забронировать</button>
						</a>
					</div>
				</div>
				
				<div class="col-3">
					<div class="ads__block">
						<a class="ads__link" href="#">
							<div class="ads__slider-img">
								<img class="ads__img" src="img/home/01.jpeg" alt="">
								<img class="ads__img" src="img/home/02.jpeg" alt="">
								<img class="ads__img" src="img/home/03.png" alt="">
								<img class="ads__img" src="img/home/04.jpeg" alt="">
							</div>
							<p class="ads__adress">ул. Мира, д. 47, кв. 25</p>
							<h4 class="ads__value">1-к квартира, 3/3 этаж, 36,3 м<sup>2</sup></h4>
							<p class="ads__price">850 000 ₽</p>
							<button class="form-btn ads__btn">Забронировать</button>
						</a>
					</div>
				</div>

				<div class="col-3">
					<div class="ads__block">
						<a class="ads__link" href="#">
							<div class="ads__slider-img">
								<img class="ads__img" src="img/home/01.jpeg" alt="">
								<img class="ads__img" src="img/home/02.jpeg" alt="">
								<img class="ads__img" src="img/home/03.png" alt="">
								<img class="ads__img" src="img/home/04.jpeg" alt="">
							</div>
							<p class="ads__adress">ул. Мира, д. 47, кв. 25</p>
							<h4 class="ads__value">1-к квартира, 3/3 этаж, 36,3 м<sup>2</sup></h4>
							<p class="ads__price">850 000 ₽</p>
							<button class="form-btn ads__btn">Забронировать</button>
						</a>
					</div>
				</div>

			
			</div>

		</div>
	</section>

<!-- Четвертая секция Description -->
	<section class="description">
		<div class="container">

			<div class="section-header">
				<h3 class="title">Мы поможем Вам выгодно и быстро преобрести или продать недвижимость!</h3>
				<p class="sub-title">Агенство недвижимости «ГАРАНТ РИЕЛТОР» решает все вопросы связанные с недвижимостью</p>
			</div>

			<div class="row">
				<div class="col-10 offset-1">

					<p class="description__txt">
						<span class="txt-str">АН «Гарант-Риелтор» всегда в курсе</span> всех событий на рынке недвижимости: будь то начало продаж квартир или проблемы с документацией в одном из коттеджных поселков. В кратчайшие сроки Вы будете располагать объективной информацией по любому из интересующих объектов, а наши специалисты помогут с различных сторон сопоставить преимущества и недостатки того или иного варианта.
					</p>

					<p class="description__txt"><span class="txt-str">Наши специалисты - профессионалы высокого класса</span> с многолетним опытом работы и глубоким знанием рынка жилья, что помогает нашим клиентам удовлетворять даже самые экстравагантные запросы в области элитной недвижимости. Обращаясь в агентство недвижимости Гарант-Риелтор, наш клиент всегда уверен в высоком классе предоставляемых услуг, в индивидуальном подходе и заинтересованности в кратчайшем, эффективном решении своих вопросов в области недвижимости.</p>

					<p class="description__txt"><i>«Мы любим своих клиентов и можем им гарантировать индивидуальный подход, всестороннее внимание и заботу, а также конфиденциальность и безопасность проводимых сделок»</i><br><br>

В настоящее время АН «Гарант-Риелтор» является одной из крупнейших и динамично развивающихся риэлтерских компаний в городе Краснотурьинске.</p>

				</div>
			</div>

		</div>
	</section>

<!-- Подвал -->
	<?php 
		include ('footer.php')
	 ?>

<!-- Инициализации -->
	<script defer>
		$(document).ready(function(){
		$('.feedbacks').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			infinite: true,
			arrows: false
		});
		$('.ads__slider-img').slick({
			infinite: true,
			arrows: false,
			dots: true
		});
		});
	</script>
	
<!-- Модальные окна -->
	<!-- Модальное окно форм регистрации и входа -->
		<?php 
			include ('modal-forms.php')	
		 ?>

</body>
</html>
