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
	
	<section class="mt-4 discount">
		<div class="container">
			<div class="row">
				<div class="col-10 col-md-6 offset-md-4 discount-text">
					<h3>Закажи портретную съёмку и получи скидку в 10%!</h3>
					<button class="btn btn btn-outline-light">Заказать</button>
				</div>
			</div>
		</div>
	</section>

	<section class="mb-5 mt-4">
		<div class="container">
			<div class="row gallery">
				<div class="col-12 text-center">
					<h3>Последние работы</h3>
				</div>
				<div class="col-11 col-sm-11 col-md-11 col-lg-6">
					<img alt="" src="img/services/wedding_photo/wedding_1.jpg">
					<img alt="" src="img/services/interier_photo/interier_2.jpg">
					<img alt="" src="img/services/wedding_photo/wedding_3.jpg">
				</div>
				<div class="col-11 col-sm-11 col-md-11 col-lg-6">
					<img alt="" src="img/services/interier_photo/interier_1.jpg">
					<img alt="" src="img/services/wedding_photo/wedding_2.jpg">
					<img alt="" src="img/services/interier_photo/interier_3.jpg">
						<a href="https://www.instagram.com/prophotomaster/" target="_blank">
							<div class="d-flex align-items-center instagram justify-content-center">
								<img src="img/logoblack.svg" alt="">
								<h4>Посмотреть остальные фотографии</h4>
							</div>
						</a>
				</div>
			</div>
		</div>
	</section>
	   
	<!-- Блок формы -->

	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center form">
					<h2 class="d-flex justify-content-center">Оставьте заявку и мы ответим Вам!</h2>
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