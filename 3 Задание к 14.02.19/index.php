<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Узнать статистику о тексте</h3><hr>
	<form action="#" method="post">
		<p><label for="text">Введите текст</label></p>
		<textarea name="text" title="Текст писать сюда..." id="text" cols="40" rows="15"></textarea><br>
		<p><label for="namb">Количество букв и скомом слове</label></p>
		<input name="namb" type="text" title="Количество букв и скомом слове" id="namb"><br><br>
		<input type="submit" value="Рассчитать!">
	</form><hr>

	<?php
		$text = $_POST['text'];
		$namb = trim($_POST['namb']);

		if ($text != "") {
			echo "Количество символов в тексте: ".preg_match_all('/\S|\s/u', $text)."<br>";
			echo "Количество слов в тексте: ".preg_match_all('/\b[A-Za-zА-Яа-я]+\b/u', $text)."<br>";
			if (is_numeric($namb) && $namb>0) {
				echo "Количество слов из ".$namb." букв в тексте: ".preg_match_all('/\b[A-Za-zА-Яа-я]{'.$namb.'}\b/u', $text, $arr)."<br>";
				echo "Это слова: <br>";
				for ($i=0; $i <count($arr[0]) ; $i++) { 
					echo "<li>".($arr[0][$i])."</li>";
				}
			} else {
				echo "Вы ввели неправильно количество букв в искомых словах!";
			}
		} else {
			echo "Вы не ввели текст!";
		}
		
	?>

</body>
</html>
