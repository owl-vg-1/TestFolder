<!DOCTYPE html>
<html>
<head>
	<title>Функцию сортировки массива</title>
</head>
<body>

<pre>
<?php
$arrayName = array( 1, 2, 10, 3, 6, 9, 22);

// Пользовательская функция сортировки массива
function sortArrr($a)
{
for ($j = count($a)-1; $j >=2; $j--){
     for ($i = 0; $i <= $j; $i++){
         if ($a[$i] < $a[$i-1]){
             $tmp_var = $a[$i - 1];
             $a[$i - 1] = $a[$i];
             $a[$i] = $tmp_var;
         }
     }
}
}

// Встроенная в PHP функция сортировки массива
sortArrr($arrayName);

// Время работы пользовательской функции
$time_start = microtime(1);
for ($i=0; $i < 1000000 ; $i++) { 
sortArrr($arrayName);
}
$time_end = microtime(1);
$time = $time_end - $time_start;
echo $time."Пузырек <br>";

// Время работы встроенной функции
$time_start1 = microtime(1);
for ($i=0; $i < 1000000 ; $i++) { 
sort($arrayName);
}
$time_end1 = microtime(1);
$time1 = $time_end1 - $time_start1;
echo $time1."Встроенная функция <br>";

// Сравнение двух функций
$work = $time / $time1;
echo $work."Во столько раз быстрее <br>";


?>
</pre>

</body>
</html>