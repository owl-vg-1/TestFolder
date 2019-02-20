<!DOCTYPE html>
<html>
<head>
	<title>Подсчет частовстречаемых слов на страницах сайтах</title>
</head>
<body>
	<form action="#" method="post">
		<p><label for="text">Введите адрес страницы сайта</label></p>
		<textarea name="text" title="Введите адрес страницы сайта" id="text" cols="40" rows="15"><?=$_POST['text']?></textarea><br>
		<p><label for="namber">Введите количество букв в искомом слове</label></p>
		<input type="text" name="namber" id="namber" value="<?=$_POST['namber']?>"> <br><br>
		<input type="submit" value="GO!">
	</form><hr>

 <?php

 	$reg_v = "/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/";


 	
 	if (true ) {
 		if (is_numeric($_POST["namber"]) && $_POST["namber"]>0) {
			$text = file_get_contents($_POST['text']);
			$pat = '/<body>(.*)<\/body>/is';
			preg_match($pat, $text, $arr);
			$pat2 = '/<.*?>/is';
			$rep = "$1";
		 	$text2 = preg_replace($pat2, $rep, $arr[0]);
		 	echo "На странице всего присутствует ".preg_match_all('/\w{1,}\b/u', $text2, $matches)." слов<br>";
		 	echo "На станице из ".$_POST['namber']." букв: " .preg_match_all("/\b\w{".$_POST["namber"]."}\b/u", $text2, $matches)." слов<br><br>";
			$arr2 = array_count_values($matches[0]);
			echo "Это слова:<br><br>" ;
			foreach ($arr2 as $k => $v) {
				echo "//".$k;
			}
			arsort($arr2);
			echo "<br><br>Десять самых популярных слов и количество их повторений:<br>" ;
			$i = 1;
				foreach ($arr2 as $k => $v) {
					if ($v>=1 && $i<=10) {
						echo $k." ".$v."<br>";
						$i++;
					}
				}
 		} else {
 		echo "Вы не ввели число букв в слове!";
 		}
 	} else {
 		echo "Адрес страницы введен не корректно!";
 	}


	

?>

</body>
</html>
