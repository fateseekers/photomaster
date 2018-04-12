<?php
	require '../autorisation/connection.php'; 
	require 'class.phpmailer.php';
	require 'class.smtp.php';

	$email = $_POST['email'];
	        
	$mail = new PHPMailer;

	$mail->isSMTP(); 
	$mail->Host = 'smtp.mail.ru';  
	$mail->SMTPAuth = true;                      
	$mail->Username = 'prophotomaster@bk.ru';
	$mail->Password = '1rhsirfddjlt1';
	$mail->SMTPSecure = 'ssl';                            
	$mail->Port = 465;
	$mail->CharSet="UTF-8";
	$mail->setFrom('prophotomaster@bk.ru');
	$mail->addAddress('fateseekers@mail.ru');
	         
	$id = $_SESSION['id'];
	$login = $_SESSION['login'];
	$userData = mysqli_query($con, "SELECT `name`, `phone`, `place` FROM `users` WHERE id = '$id'");
	$userRow = mysqli_fetch_assoc($userData);

	if(!empty($userRow['name']) && !empty($userRow['phone']) && !empty($userRow['place'])){
		// Письмо
		$mail->isHTML(true); 
		$mail->Subject = "Заголовок";
		$mail->Body    = 'Пользователь '.$userRow['name'].' отправил сообщение, его почта: '.$email.' Вы можете перезвонить ему по номеру: '.$userRow['phone'].' Его место съёмки '.$userRow['place'];
	}else{                        
		// Письмо
		$mail->isHTML(true); 
		$mail->Subject = "Заголовок";
		$mail->Body    = "Пользователь отправил заявку на консультацию, его почта: $email";
	}

	if(!$mail->send()) {
	    echo 'Сообщение не может быть отправлено';
	    echo 'Ошибка: ' . $mail->ErrorInfo;
	} else {
	    echo 'ok';
	}
?>

