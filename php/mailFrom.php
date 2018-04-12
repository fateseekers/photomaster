<?php
	require '../autorisation/connection.php'; 
	require 'class.phpmailer.php';
	require 'class.smtp.php';


	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$textarea = htmlspecialchars($_POST['textarea']);

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

	$mail->isHTML(true); 
	$mail->Subject = "Заголовок";
	$mail->Body    = "Пользователь $name отправил сообщение, его почта: $email. Вы можете перезвонить ему по номеру: $phone. Его сообщение $textarea";
						
	if(!$mail->send()) {
	    echo 'Сообщение не может быть отправлено';
	    echo 'Ошибка: ' . $mail->ErrorInfo;
	} else {
	    echo 'ok';
	}
?>

