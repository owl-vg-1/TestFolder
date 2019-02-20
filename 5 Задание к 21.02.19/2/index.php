<!DOCTYPE html>
<html>
<head>
	<title>Подсчет частовстречаемых слов на страницах сайтах</title>
</head>
<body>
	<form action="#" method="post">
		<p><label for="text">Введите текст</label></p>
		<textarea name="text" title="Введите текст" id="text" cols="40" rows="15"><?=$_POST['text']?></textarea><br>
		<input type="submit" value="GO!">
	</form><hr>

<?php 
include "my_fun.php";
$text = $_POST['text'];


if (count(bad_word($text))>0) {
	$arr = bad_word($text);
	echo "Есть цензура! Вы использовали слова: <ol>";
	foreach ($arr as $key => $value) {
		echo "<li>$value</li>";
	}
	echo "</ol>";
} else {
	echo "Нету цензуры! Ваше сообщение: <br>";
	echo markdown(b_b(smile($text)));
}



?>

</body>
</html>
