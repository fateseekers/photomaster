<?php 
	require ("connection.php"); 
	
	if(!isset($_SESSION['id']) && !isset($_SESSION['login'])){
		if(isset($_POST['submit'])){
			$login = mysqli_real_escape_string($con, trim($_POST['login']));
			$password = mysqli_real_escape_string($con, trim($_POST['password']));
			if (!empty($login) && !empty($password)) {
				$query = "SELECT `id` , `login` FROM `users` WHERE login = '$login' AND password = SHA('$password')";
				$data = mysqli_query($con,$query);
				if(mysqli_num_rows($data) == 1) {
					$row = mysqli_fetch_assoc($data);
					$_SESSION['id'] = $row['id'];
					$_SESSION['login'] = $row['login'];
					header('Location: '.'../index.php');
				} else {
					echo "Введены не верные данные";
				}
			} else {
				echo "Поля заполненны не верно";
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
					<div class="col-12 offset-0 col-md-10 offset-md-1 text-center">
						<legend>Вход</legend>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
								<div class="flex-column">
									<div class="flex-row">
										<label for="login">Логин:  </label>
										<input type="text" name="login">
									</div>
									<div class="flex-row">
										<label for="password">Пароль: </label>
										<input type="password" name="password">
									</div>
								</div>
								<button type="submit" name="submit" class="btn"></button>
							</div>
							<a href="reg.php">Ещё не зарегистрированы?</a>
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