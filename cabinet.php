<?php
	require ("autorisation/connection.php"); 

	$id = $_SESSION['id'];
	$login = $_SESSION['login'];

	if (isset($_POST['edit_pass'])) {
		$old_pass = mysqli_real_escape_string($con, trim($_POST['old_pass']));
		$new_pass = mysqli_real_escape_string($con, trim($_POST['new_pass']));
		$confirm_password = mysqli_real_escape_string($con, trim($_POST['confirm_password']));
		if (!empty($old_pass) && !empty($new_pass) && !empty($confirm_password)) {
			if (($old_pass != $new_pass) && ($new_pass == $confirm_password)) {
				$user = "SELECT * FROM users WHERE login='$login' AND password = SHA('$old_pass')";
	            $result = mysqli_query($con, $user);
	            if(mysqli_num_rows($result) == 1){
					$update = "UPDATE users SET password=SHA('$confirm_password') WHERE login='$login'";
					$edit = mysqli_query($con, $update);
					$msg = "Пароль успешно изменён!";
		            } else {
		            	$msg = "Пароль не изменён!";
		            }
		        } else{
		        	$msg = "Старый пароль совпадает с новым";
		        }
		    } else {
		        $msg = "Поля пустые!";
	        }
    }

    if (isset($_POST['edit_info'])) {
    	$name = mysqli_real_escape_string($con, trim($_POST['name']));
		$phone = mysqli_real_escape_string($con, trim($_POST['phone']));
		$place = mysqli_real_escape_string($con, $_POST['place']);
		if (!empty($name) && !empty($phone) && !empty($place)) {
			$dataQuery = "SELECT * FROM `users` WHERE login='$login'";
	            $dataRes = mysqli_query($con, $dataQuery);
	            if(mysqli_num_rows($dataRes) == 1){
					$update = "UPDATE `users` SET name='$name', phone='$phone', place='$place' WHERE login='$login'";
					$edit = mysqli_query($con, $update);
					$dataMsg = "Данные записаны!";
				} else {
					$dataMsg = "Данные не записаны!";
				}
		} else {
			$info = "Поля пустые!";
		}
    }
	

	$loginbd = mysqli_query($con, "SELECT `login` FROM `users` WHERE id = '$id'");
	$loginrow = mysqli_fetch_assoc($loginbd);

	$userData = mysqli_query($con, "SELECT `name`, `phone`, `place` FROM `users` WHERE id = '$id'");
	$userRow = mysqli_fetch_assoc($userData);


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
	
	<!-- Личный кабинет -->

	<section class="mt-5">
		<div class="container">
			<div class="row my-5">
				<div class="col-10 text-center d-flex flex-column">
					<h2>Личный кабинет</h2>
					<?php 
						if(!empty($userRow['name'])){
							echo "<h2>Добро пожаловать,"."	".$userRow['name']."!</h2>"; 
						} else {
							echo "<h2>Добро пожаловать,"."	".$loginrow['login']."!</h2>"; 
						}
					?>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-8">
					<h5>Ваше имя: <?php echo $userRow['name'] ?></h5>
					<h5>Ваш телефон: <?php echo $userRow['phone'] ?></h5>
					<h5>Ваше место съёмки: <?php echo $userRow['place'] ?></h5>
				</div>
			</div>

	<!-- Редактирование информации -->

			<div class="row">
				<div class="col-11 col-md-6 mb-5">
					<form enctype="multipart/form-data" method="post" id="formPass" class="d-flex flex-column">
						<h3 class="text-center">Изменение пароля</h3>
						<div class="row my-1 align-items-center">
							<div class="col-5 col-md-4 col-lg-3 p-0">
								<label for="old_pass">Ваш старый пароль*: </label>
							</div>
							<div class="col-5 col-md-4 col-lg-3 p-0">
								<input id="old_pass" class="form-control" type="password" name="old_pass">
							</div>
						</div>
						<div class="row my-1 align-items-center">
							<div class="col-5 col-md-4 col-lg-3 p-0">
								<label for="new_pass">Новый пароль*: </label>
							</div>
							<div class="col-5 col-md-4 col-lg-3 p-0">
								<input id="new_pass" class="form-control" type="password" name="new_pass">
							</div>
						</div>
						<div class="row my-1 align-items-center">
							<div class="col-5 col-md-4 col-lg-3 p-0">
								<label for="confirm_paswword">Подтвердите пароль*: </label>
							</div>
							<div class="col-5 col-md-4 col-lg-3 p-0">
								<input id="confirm_paswword" class="form-control" type="password" name="confirm_password">
							</div>
						</div>
						<div class="row message mb-2">
							<div class="message">
								<?php
									if (!empty($msg)) {
										echo $msg;
									}
								?>
							</div>
						</div>
						<div class="row d-flex justify-content-center">
							<input class="btn btn-outline-danger mr-1" type="reset">
							<input class="btn btn-outline-success ml-1" name="edit_pass" type="submit" value="Отправить">
						</div>
					</form>
				</div>
				<div class="col-11 col-md-6">
					<form enctype="multipart/form-data" method="post" id="formData" class="d-flex flex-column">
						<h3 class="text-center">Личные данные</h3>
						<div class="row my-1 align-items-center">
							<div class="col-6 col-md-4 col-lg-3 p-0">
								<label for="name">Ваше имя*: </label>
							</div>
							<div class="col-5 p-0">
								<input id="name" class="form-control" type="text" name="name" required>
							</div>
						</div>
						<div class="row my-1 align-items-center">
							<div class="col-6 col-md-4 col-lg-3 p-0">
								<label for="phone">Ваш телефон*: </label>
							</div>
							<div class="col-5 p-0">
								<input id="phone" class="form-control" type="text" name="phone" required>
							</div>
						</div>
						<div class="row my-1 align-items-center">
							<div class="col-6 col-md-4 col-lg-3 p-0">
								<label for="place">Где хотите провести съёмку*: </label>
							</div>
							<div class="col-5 p-0">
								<input id="place" class="form-control" type="text" name="place" required>
							</div>
						</div>
						<div class="row message mb-2">
							<div class="message">
								<?php
									if (!empty($dataMsg)) {
										echo $dataMsg;
									}
								?>
							</div>
						</div>
						<div class="row d-flex justify-content-center">
							<input class="btn btn-outline-danger mr-1" type="reset">
							<input class="btn btn-outline-success ml-1" name="edit_info" type="submit" value="Отправить">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="js/masked.js"></script>
</body>
</html>