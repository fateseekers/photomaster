<?php
	session_start();
	require("constants.php");
	$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) OR DIE('Ошибка подключения к базе данных');
	$con->set_charset("utf8");
?>