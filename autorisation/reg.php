<?php 
	require ("connection.php"); 

	if(isset($_POST['submit'])){
		$login = mysqli_real_escape_string($con, trim($_POST['login']));
		$password = mysqli_real_escape_string($con, trim($_POST['password']));
		if (!empty($login) && !empty($password)) {
			$query = "SELECT * FROM `users` WHERE login = '$login'";
			$data = mysqli_query($con, $query);
			if (mysqli_num_rows($data) == 0) {
				$query = "INSERT INTO `users` (login, password) VALUES ('$login', SHA('$password'))";
				mysqli_query($con, $query);
				$reg = "Аккаунт создан";
				header('Location: '.'thanks.php');
				mysqli_close($con);
				exit();
			} else {
				echo "Логин уже занят";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Курсововой проект Пучков Павел</title>
		<link rel="shortcut icon" href="../img/logowhite.ico">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style/autorisation.css">
	</head>
	<body>
		<section class="center">
			<div class="container">
				<div class="row">
					<div class="col-10 offset-1 col-md-10 offset-md-1 text-center">
						<legend>Регистрация</legend>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
								<div class="flex-column">
									<div class="flex-row">
										<label for="login">Логин:  </label>
										<input type="text" name="login" pattern="[A-Za-z0-9_-]{4,25}" autocomplete="off" required>
									</div>
									<div class="flex-row">
										<label for="password">Пароль: </label>
										<input type="password" name="password" autocomplete="off">
									</div>
								</div>
								<button type="submit" name="submit" class="btn"></button>
							</div>
							<a href="signup.php">Уже зарегистрированы?</a>
						</form>
					</div>
				</div>
			</div>
		</section>

	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>