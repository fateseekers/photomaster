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
				<div class="col-12 col-md-8 col-lg-6">
					<h2 class="d-flex justify-content-center">Если у Вас еще остались какие-то вопросы, задайте их нам!</h2>
					<form id="contactform" class="d-flex flex-column contactform">
						<div class="d-flex flex-row flex-md-row">
							<div class="col-6 pr-2">
								<p class="flex-column">
									<label for="name">Ваше имя: </label>
									<input type="text" name="name">
								</p>
							</div>
							<div class="col-6 pl-0">
								<p class="flex-column">
									<label for="phone">Ваш телефон: </label>
									<input id="phone" type="text" name="phone">
								</p>
							</div>
						</div>
						<div class="col-12">
							<p>
								<label for="email">Ваша почта: </label>
								<input type="email" id="email" name="email">
							</p>
						</div>
						<div class="col-12">
							<p class="d-flex flex-column">
								<label for="textarea">Введите ваше сообщение: </label>
								<textarea name="textarea" id="textarea" rows="5" form="contactform"></textarea>
							</p>
						</div>
						<div class="col-12 d-flex justify-content-center text-center mt-3 mb-4">
							<input class="mr-2 btn btn-outline-danger" type="reset">
							<input class="ml-2 btn btn-outline-success" type="submit" name="submit">
						</div>
					</form>
				</div>
				<div class="col-12 col-md-4 col-lg-6">
					<h4>Вы также можете позвонить нам по телефонам:</h4>
					<div class="phone numbers my-4">
						<h6>+7(958)888-88-88</h6>
						<h6>+7(958)888-88-88</h6>
					</div>
					<h4>Или приехать в нашу студию</h4>
					<div class="addres numbers my-4">
						<h6>ул. Большая Семеновская д.38</h6>
					</div>
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae0c519fcc83b38a606a3142b9cfb45b7993f486f81aa811d35251c4d4ef38def&amp;source=constructor" width="100%" height="240" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-10 text-center mb-5">
					<h2>Почему выбирают нас?</h2>
				</div>
			</div>
			<div class="row pluses">
				<div class="col-10 col-md-10 d-flex flex-column flex-md-row">
						<img class="mx-auto w-25 w-md-100" src="img/anothersvg/consultationWhite.svg" alt="">
					<div class="d-flex flex-column text-center text-md-left ml-0 ml-md-4"> 
						<h3>Выбрать вид съёмки</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi odit aspernatur asperiores quia laudantium porro velit. Eligendi neque, quos quo at eos earum qui harum, temporibus dolore laboriosam aperiam.</p>
					</div>
				</div>
				<div class="col-10 col-md-10 d-flex flex-column-reverse flex-md-row my-5">
					<div class="d-flex flex-column text-center text-md-left"> 
						<h3>Выбрать вид съёмки</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi odit aspernatur asperiores quia laudantium porro velit. Eligendi neque, quos quo at eos earum qui harum, temporibus dolore laboriosam aperiam.</p>
					</div>
					<img class="mx-auto w-25 w-md-100" src="img/anothersvg/groupWhite.svg" alt="">
				</div>
				<div class="col-10 col-md-10 d-flex flex-column flex-md-row">
						<img class="mx-auto w-25 w-md-100" src="img/anothersvg/previewWhite.svg" alt="">
					<div class="d-flex flex-column text-center text-md-left ml-0 ml-md-4"> 
						<h3>Выбрать вид съёмки</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi odit aspernatur asperiores quia laudantium porro velit. Eligendi neque, quos quo at eos earum qui harum, temporibus dolore laboriosam aperiam.</p>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="js/masked.js"></script>
</body>
</html>