<?php
	require ("autorisation/connection.php"); 

	if(isset($_SESSION['id']) && isset($_SESSION['login'])){

		$id = $_SESSION['id'];
		$login = $_SESSION['login'];

		$nameQuery = "SELECT `name` FROM `users` WHERE id='$id'";
		$nameData = mysqli_query($con, $nameQuery);
		$name = mysqli_fetch_assoc($nameData);
		$username = $name['name'];

		if(isset($_POST['review'])){
			$tittle = mysqli_real_escape_string($con, $_POST['tittle']);
			$content = mysqli_real_escape_string($con, $_POST['content']);
			if(!empty($username)){
				if(!empty($tittle) && (!empty($content))){
					$query = "INSERT INTO `posts` (name, tittle, content) VALUES ('$username', '$tittle', '$content')";
				}
			} else {
				$query = "INSERT INTO `posts` (name, tittle, content) VALUES ('$login', '$tittle', $content)";
			}
				$data = mysqli_query($con,$query);
		}
	}

	


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
	
	<!-- Отзывы -->

	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>Отзывы наших клиентов:</h3>
				</div>
				<?php
						
					$postQuery = "SELECT * FROM `posts`";
					$postData = mysqli_query($con, $postQuery);

					while($post = mysqli_fetch_assoc($postData)){

				?>
				<div class="col-12 posts d-flex flex-column my-2">
					<div class="headers d-flex flex-column flex-sm-row">
						<h5 class="mr-2">Автор: <?php echo $post['name'];?> |</h5>
						<h5>Дата: <?php echo $post['date']; ?></h5>
					</div>
					<div class="post_content d-flex flex-column">
						<div class="tittle">
							<p>Тема отзыва: <?php echo $post['tittle']; ?></p>
						</div>
						<div class="post">
							<p>Отзыв: <?php echo $post['content']; ?></p>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>

	<!-- Отправка отзыва -->

	<?php 
		if(isset($_SESSION['id']) && isset($_SESSION['login'])){
	?>

	<section class="mt-5">
		<div class="container">
			<div class="row justify-content-start">
				<form class="review" action="" method="POST">
					<div class="row">
						<div class="col-12">
							<caption>Оставьте отзыв!</caption>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-12 col-sm-4">
							<label for="tittle">Заголовок:	</label>
						</div>
						<div class="col-12 col-sm-8">
							<input id=tittle type="text" name="tittle">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-12 col-sm-4">
							<label for="content">Отзыв:	</label>
						</div>
						<div class="col-12 col-sm-8">
							<textarea name="content" id="content" rows="5"></textarea>
						</div>
					</div>
					<hr>
					<input type="submit" name="review">
				</form>
			</div>
		</div>
	</section>

	<?php
		} else {
			$regMsg = "Оставлять отзыв можно только зарегестрированым пользователям";
		}
	?> 

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
</body>
</html>