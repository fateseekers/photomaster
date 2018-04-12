<?php
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['login']);
	session_destroy();
	header('Location: '.'http://photomaster.std-278.ist.mospolytech.ru');
?>