<!DOCTYPE html>
<html>
<head>
	<title>Беседка</title>
</head>
<body>
	<div style="float: left; width:33%; height:250px">
		<p>Для использования смалов можно вводить:</p>
		<ul>
			<li>:) <img src=1.jpg style="height:25px">/Радость/</li>
			<li>:(<img src=2.jpg style="height:25px">/Грусть/</li>
			<li>D-:<img src=3.jpg style="height:25px">/Злость/</li>
			<li>:-*<img src=4.png style="height:25px">/Поцелуй/</li>
			<li>:-P<img src=5.png style="height:25px">/Показать язык/</li>

		</ul>
	</div>
	<div style="float: left; width:33%; height:250px">
		<p>Для использования bb кода можно вводить:</p>
		<ul>
			<li style="margin-top: 10px">[b]текст[/b] - чтобы получить жирный текст</li>
			<li style="margin-top: 10px">[i]текст[/i] - чтобы получить курсивный текст</li>
			<li style="margin-top: 10px">[u]текст[/u] - чтобы получить подчеркнутый текст</li>
			<li style="margin-top: 10px">[h3]текст[/h3] - чтобы получить заголовок</li>
			<li style="margin-top: 10px">[*]текст[/*] - чтобы получить пункт списка</li>
		</ul>
	</div>
	<div style="float: left; width:34%; height:250px">
		<p>Для использования markdown кода можно вводить:</p>
		<ul>
			<li style="margin-top: 10px">**текст** - чтобы получить жирный текст</li>
			<li style="margin-top: 10px">*текст* - чтобы получить курсивный текст</li>
			<li style="margin-top: 10px">~~текст~~ - чтобы получить подчеркнутый текст</li>
			<li style="margin-top: 10px">###текст - чтобы получить заголовок</li>
			<li style="margin-top: 10px">*текст - чтобы получить пункт списка</li>
		</ul>
	</div>
	<hr>
	<form action="#" method="post">
		<p><label for="textN">Введите Ваше сообщение:</label></p>
		<textarea name="textN" title="ВВаше сообщение:" id="textN" cols="40" rows="15"><?=$_POST['textN']?></textarea><br>
		<p><label for="nik">Введите Ваше имя:</label></p>
		<input type="text" name="nik" id="nik" value="<?=$_POST['nik']?>"><br><br>
		<input type="submit" value="Отправить сообщение!">
	</form>
	<hr>

<?php
include "my_fun.php";


//Принимаем данные от пользователя из формы и собираем в сообщение для записи в базу
$nik = $_POST['nik'];
$textN = $_POST['textN'];
$now=date('d-m-Y h:i:s');

//Проверка данных полученных от пользователя и вывод их 
if (empty($nik)) {
	echo "<h2>Вы не ввели имя!</h2>";
}elseif (empty($textN)) {
	echo "<h2>Вы не ввели сообщение!</h2>";  
} elseif  (count(bad_word($textN))>0) {
	echo "<h2>Цензура!</h2>";
	$arr = bad_word($textN);
	echo "Вы использовали слова: <ol>";
	foreach ($arr as $key => $value) {
		echo "<li>$value</li>";
	}
	echo "</ol>";
}else {
	echo "Ник есть! Сообщение есть! Проверка на цензуру пройдена!<h2>Ваше сообщение добавлено!</h2>";

	//Формируем новое сообщение
	$post = "<post><date>".$now."</date><msg>".$textN."</msg><nik>".$nik."</nik></post>";

	//Считываем уже имеющиеся сообщеня и дописываем новое сообщение в начало
	$old_message = file_get_contents('message.xml');
	$message=fopen('message.xml', 'r+');
	$all_message = $post.$old_message;
	fwrite($message, $all_message);
	fclose ($message);

	// Считываем файл для после добавления последнего сообщения и выводим на экран
	$text = file_get_contents('message.xml');
	$nik = get_nik($text);
	$msg = markdown(b_b(smile(get_msg($text))));
	$date_msg = get_date($text);

	//Непосредственно вывод на экран соообщений
	echo "<table>";
	echo "<tr>
		<th style='border: solid 3px green'>Дата сообщения</th>
		<th style='border: solid 3px green'>Имя автора</th>
		<th style='border: solid 3px green'>Сообщение</th
		></tr>";
	for ($i=0; $i <count($nik) ; $i++) { 
		echo"<tr>";
	   	echo"<td style='border: solid 2px #000'>".$date_msg[$i]."</td>".
	   		"<td style='border: solid 2px #000'>".$nik[$i]."</td>".
	   		"<td style='border: solid 2px #000'>".$msg[$i]."</td>";
	  	echo"</tr>";
		}
	echo"</table>";

}


?>
</body>
</html>