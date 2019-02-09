<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Возможно вычислить:</h3>
	<ul>
		<li>sum - сумму</li>
		<li>product - произведение</li>
		<li>pow - возведение в степень</li>
	</ul>
	<hr>

	<form action="#" method="post">
		<p>Посчитаем?</p>
		<input name="funch" type="text" value="">Введите название функции<br><br>
		<input name="namb1" type="text" value="">Введите первое число<br><br>
		<input name="namb2" type="text" value="">Введите второе число<br><br>
		<input type="submit" value="Рассчитать!">
	</form><hr>

	<?php
		function sum ($a, $b)
		{
			return $result = $a + $b;
		}

		function product ($a, $b)
		{
			return $result = $a * $b;
		}

		$funch = strtolower(trim($_POST[funch]));
		$namb1 = trim($_POST[namb1]);
		$namb2 = trim($_POST[namb2]);


		if ($funch != 'sum' && $funch != 'product' && $funch != 'pow') {
			echo "Введите правильно название функции";
			exit();
		}

		if (!is_numeric($namb1)) {
			echo "Первое значение не число!";
			exit();
		}

		if (!is_numeric($namb2)) {
			echo "Первое значение не число!";
			exit();
		}

		if ($funch == 'sum') {
			$action = ' плюс ';
		} elseif ($funch == 'product') {
			$action = ' умножить ';
		} else {
			$action = ' в степени ';
		}


		echo "<br>";
		echo "<strong>".$namb1.$action.$namb2." = ".$result = $funch($namb1, $namb2)."</strong>";


	?>

</body>
</html>