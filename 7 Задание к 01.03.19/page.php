<?php
	session_start();

	$time=time();
	$timeNew = $time - $_SESSION['time'] ;
		
	$name=mb_substr($_POST['name'], 0, 1);
	$patronymic=mb_substr($_POST['patronymic'], 0, 1);
		
	$minutes = floor($timeNew % 3600 / 60);
	$seconds = $timeNew % 60;

	echo "Уважаемый ". $_POST['surname']." ".$name.".".$patronymic."., с момента вашей регистрации прошло минут: ".$minutes." секунд: ".$seconds;
?>