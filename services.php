<?php
	require ("autorisation/connection.php"); 
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Курсововой проект Пучков Павел</title>
		<link rel="shortcut icon" href="img/logowhite.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style/style.css">
	</head>
<body class="pt-5">
	
	<!-- Меню навигации -->

	<header class="bg-dark fixed-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
			<div class="logo_flex d-flex align-items-center">
				<a class="navbar-brand d-flex align-items-center" href="index.php">
					<span>Pro<img class="logo" src="img/logo.svg" alt="">Master</span>
				</a>
			</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav menu text-center align-items-center">
					<li class="nav-item">
						<a class="nav-link btn btn-outline-light btn-sm" href="services.php">
							Услуги
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-outline-light btn-sm" href="gallery.php">
							Портфолио
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-outline-light btn-sm" href="review.php">
							Отзывы
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-outline-light btn-sm" href="about.php">
							О нас
						</a>
					</li>
					<?php
						if(empty($_SESSION['id']) && empty($_SESSION['login'])) {
					?>	
						<li class="nav-item">
							<a class="nav-link btn btn-outline-light btn-sm" href="autorisation/reg.php">
							Регистрация\Вход
							</a>
						</li>
					<?php 
						} else { 
					?>
						<li class="nav-item">
							<a class="nav-link btn btn-outline-light btn-sm" href="cabinet.php">
								Личный кабинет
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-outline-light btn-sm" href="autorisation/logout.php">
							Выход
							</a>
						</li>
					<?php 
						}
					?>
				</ul>
			</div>
		</nav>
	</header>
	
	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2>Какие виды съёмки мы оказываем?</h2>
				</div>
				<div class="col-12 flex-column mt-5">
					<div class="wedding d-flex flex-column flex-md-row">
						<div class="col-12 col-md-8">
							<h3>Свадебная фотосессия. </h3>
							<hr>
							<p class="d-flex">Свадьба – один из самых важных и долгожданных дней в жизни человека. Девушки мечтают о нем с самого детства, а когда эта мечта сбывается, хочется навсегда сохранить эмоции и воспоминания о празднике. Поэтому важность работы профессионального фотографа и видеооператора во время торжества просто невозможно переоценить – ведь только от этих людей зависит сохранность Ваших воспоминаний о лучшем дне!</p>
							<div class="photorow">
								<img src="img/services/wedding_photo/wedding_1.jpg" alt="">
								<img src="img/services/wedding_photo/wedding_2.jpg" alt="">
								<img src="img/services/wedding_photo/wedding_4.jpg" alt="">
							</div>
						</div>
						<div class="price col-12 col-md-4">
							<h5>12 часов работы фотографа и оператора</h5>
							<h5 class="grey">Ретушь 100-150 снимков</h5>
							<h5>Цветокоррекция остальных фото</h5>
							<h5 class="grey">Съемка видео фильма</h5>
							<h5>Монтаж фильма</h5>
							<h5 class="grey">Красивая свадебная фотокнига В ПОДАРОК!</h5>
							<h5>Цена: 36.000 тыс.р.</h5>
							<button class="btn btn-outline-dark">Оставить заявку!</button>
						</div>
					</div>
				</div>
				<div class="col-12 flex-column mt-5">
					<div class="portrait d-flex flex-column flex-md-row">
						<div class="col-12 col-md-8">
							<h3>Портретная съёмка</h3>
							<hr>
							<p class="d-flex">Данная услуга может быть интересна если Вам нужен красивый портрет, бизнес-портрет, фотосъемка делового портрета, выездная съемка руководства и сотрудников компании, семейная фотография, детский портрет, модельные тесты, актерское портфолио, профессиональная фотосессия в студии и даже фотосъемка домашних любимцев.</p>
							<div class="photorow">
								<img src="img/services/portrait/portrait_1.jpg" alt="">
								<img src="img/services/portrait/portrait_2.jpg" alt="">
								<img src="img/services/portrait/portrait_3.jpg" alt="">
							</div>
						</div>
						<div class="price col-12 col-md-4">
							<h5>2 часа работы фотографа и оператора</h5>
							<h5 class="grey">Ретушь 20-30 снимков</h5>
							<h5>Цветокоррекция остальных фото</h5>
							<h5 class="grey">До 300 фотографий</h5>
							<h5>Работа визажиста</h5>
							<h5 class="grey">Принтбук В ПОДАРОК!</h5>
							<h5>Цена: 36.000 тыс.р.</h5>
							<button class="btn btn-outline-dark">Оставить заявку!</button>
						</div>
					</div>
				</div>
				<div class="col-12 flex-column mt-5">
					<div class="interier d-flex flex-column flex-md-row">
						<div class="col-12 col-md-8">
							<h3>Интерьерная съёмка съёмка</h3>
							<hr>
							<p class="d-flex">Интерьерная съемка - это услуга по созданию фотографий жилой и коммерческой недвижимости, использующихся в рекламе или портфолио специалистов, для комплексной демонстрации интерьера, его дизайна и оформления. </p>
							<div class="photorow">
								<img src="img/services/interier_photo/interier_1.jpg" alt="">
								<img src="img/services/interier_photo/interier_2.jpg" alt="">
								<img src="img/services/interier_photo/interier_3.jpg" alt="">
							</div>
						</div>
						<div class="price col-12 col-md-4">
							<h5>Детальная ретушь</h5>
							<h5 class="grey">Детальная цветокоррекция</h5>
							<h5>Съемка с импульсным светом</h5>
							<h5 class="grey">До 100 фотографий</h5>
							<h5>Съемка HDR</h5>
							<h5 class="grey">Цена: 10.000 тыс.р.</h5>
							<button class="btn btn-outline-dark">Оставить заявку!</button>
						</div>
					</div>
				</div>
				<div class="col-12 flex-column mt-5">
					<div class="child d-flex flex-column flex-md-row">
						<div class="col-12 col-md-8">
							<h3>Детская фотосессия</h3>
							<hr>
							<p class="d-flex">Вся жизнь полна многочисленных мгновений, которые уходят и остаются лишь в памяти. Мы предоставлем Вам возможность запечатлеть бесценные секунды в фотографиях. Детская фотосъемка, фотосессия в студии или на пленэре в Москве позволят вам оставить навсегда с вами все веселые, важные, ответственные события вашей счастливой семейной жизни.</p>
							<div class="photorow">
								<img src="img/services/child_photo/child_1.jpg" alt="">
								<img src="img/services/child_photo/child_2.jpg" alt="">
								<img src="img/services/child_photo/child_3.jpg" alt="">
							</div>
						</div>
						<div class="price col-12 col-md-4">
							<h5>Фотосъёмка до 5 человек</h5>
							<h5 class="grey">Обработка фотографий</h5>
							<h5>Работа визажиста</h5>
							<h5 class="grey">до 400 фотографий</h5>
							<h5>Съемка HDR</h5>
							<h5 class="grey">Доступ к гардеробу</h5>
							<h5>Цена: <del>12.000 тыс.р.</del><br>10.000 тыс.р.</h5>
							<button class="btn btn-outline-dark mt-0">Оставить заявку!</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	   
	<!-- Блок формы -->

	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center form">
					<h2 class="d-flex justify-content-center">Оставь заявку и получи свою оригинальную фотосессию</h2>
					<img class="mailsvg" src="img/anothersvg/mail.svg" alt="">
					<div class="d-flex flex-column mx-auto">
						<form enctype="multipart/form-data" method="post" id="form" class="d-flex flex-column form">
							<div class="row my-1 align-items-center flex-column flex-md-row">
								<div class="">
									<label for="email">Ваша почта*: </label>
								</div>
								<div class="mx-2">
									<input id="email" class="form-control" type="email" name="email" required>
								</div>
								<div>
									<input class="btn btn-outline-success" name="submit" type="submit" value="Отправить">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Футер -->

	<footer class="mt-5">
		<div class="container">
			<div class="row text-right">
				<div class="col-10">
					<p>
						&copy; Все права защищены 2018<br>
						Изображения взяты с сайта:  <a href="https://pixabay.com/ru/" target="_blank">Изображения</a>
					</p>
				</div>
				<div class="col-10">
					<div class="addthis_inline_share_toolbox_1gza"></div>
				</div>
			</div>
		</div>
	</footer>




	<!--Блок социальных кнопок-->

    <div class="container">
        <div class="social" data-toggle="modal" data-target="#ModalSocial">
	        <img src="img/anothersvg/heart.svg" alt="">
        </div>
    </div>

    <div class="modal fade" id="ModalSocial" tabindex="-1" role="dialog" aria-labelledby="SocialButtons" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SocialButtons">Поделитесь в социальных сетях</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
            </div>
        </div>
	</div>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aac47b43aef7d1f"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/common.js"></script>
</body>
</html>