<?php
session_start();
$time=time();
$_SESSION['time']=$time;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
<form action="page.php" method="post">
	<label for="surname">Введите Вашу фамилию:</label><br>
	<input type="text" name="surname" id="surname" value="<?=$_POST['surname']?>"><br><br>
	<label for="name">Введите Ваше имя:</label><br>
	<input type="text" name="name" id="name" value="<?=$_POST['name']?>"><br><br>
	<label for="patronymic">Введите Ваше отчество:</label><br>
	<input type="text" name="patronymic" id="patronymic" value="<?=$_POST['patronymic']?>"><br><br>
	<input type="submit" value="Зарегистрироваться!">
</form>
</body>
</html>

