<!DOCTYPE html>
<html>
<head>
	<title>Производительность функций PHP</title>
</head>
<body>
<?php include 'functions.php'; ?>
	<h2> Сравнение производительности встроенных функций и их аналогов </h1>
	<hr><hr>


	<h4> 1.Встроенная функция array_product </h4>


	<p>Время работы 100 000 циклов встроенной функция array_product
	<?php 
		$myArray = array(1, 2, 3, 4, 5);
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			array_product($myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд.</p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_product
	<?php
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) {
			my_array_product ($myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>


	<h4> 2.Встроенная функция array_sum </h4>

	<p>Время работы 100 000 циклов встроенной функция array_sum
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			array_sum($myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд.</p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_sum
	<?php
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) {
			my_array_sum ($myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>


	<h4> 3.Встроенная функция array_search </h4>


	<p>Время работы 100 000 циклов встроенной функция array_search
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			array_search(5, $myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд.</p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_search
	<?php
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) {
			my_array_search ($myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>

	<h4> 4.Встроенная функция array_reverse </h4>

		<p>Время работы 100 000 циклов встроенной функция array_reverse
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			array_reverse($myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд </p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_reverse
	<?php
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) {
			my_array_reverse ($myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>


	<h4> 5.Встроенная функция in_array </h4>
	<p>Время работы 100 000 циклов встроенной функция in_array
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			in_array (5, $myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд </p>
	<p> Время работы 100 000 циклов пользовательской функция my_in_array
	<?php
		$time_start = microtime(1);
		$sought = 5;
		for ($i=0; $i < 100000 ; $i++) {
			my_in_array ($sought, $myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>


	<h4> 6.Встроенная функция array_key_exists </h4>
	<p>Время работы 100 000 циклов встроенной функция array_key_exists
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			$search_key = 3;
			array_key_exists($search_key, $myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд </p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_key_exists
	<?php
		$time_start = microtime(1);
		$search_key = 0;
		for ($i=0; $i < 100000 ; $i++) {
			my_array_key_exists($search_key, $myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>


	<h4> 7.Встроенная функция array_flip </h4>
	<p>Время работы 100 000 циклов встроенной функция array_flip
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			array_flip ($myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд </p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_flip
	<?php
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) {
			my_array_flip ($myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr>

	<h4> 8.Встроенная функция array_keys </h4>
	<p>Время работы 100 000 циклов встроенной функция array_keys
	<?php 
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) { 
			array_keys ($myArray);
		}
		$time_end = microtime(1);
		echo round (($time1 = $time_end - $time_start), 5);
	?>
	 секунд </p>
	<p> Время работы 100 000 циклов пользовательской функция my_array_keys
	<?php
		$time_start = microtime(1);
		for ($i=0; $i < 100000 ; $i++) {
			my_array_keys ($myArray);
		} 
		$time_end = microtime(1);
		echo round (($time2 = $time_end - $time_start), 5);
		?>
	секунд.</p>
	<p>Встроенная функция работает ориентировочно быстрее пользовательской в <?php echo round(($time2/$time1), 3) ?> раз.</p>
	<hr><hr>


</body>
</html>