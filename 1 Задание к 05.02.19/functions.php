<?php
// 1 Подсчет произведения элементов массива циклом
function my_array_product ($arr)
	{
		$result = 1;
		for ($i=0; $i<count($arr); $i++) { 
			$result = $result * $arr[$i];
		}
      return $result;
	}

// 2 Подсчет суммы элементов массива циклом
function my_array_sum ($arr)
	{
		$result = 0;
		for ($i=0; $i<count($arr); $i++) { 
			$result = $result + $arr[$i];
		}
      return $result;
	}

// 3 Поиск данного значения в массиве циклом с возвратом ключа искомой позиции
function my_array_search ($arr)
	{
		$sought = 5;
		for ($i=0; $i<count($arr); $i++) { 
			if ($sought == $arr[$i]) {
				$result = "Искомая позиция является $i элементом массива";
			}
		}
      return $result;
	}

// 4 Преобразует массив в новый массив с элементами в обратном порядке 
function my_array_reverse ($arr) {
	for ($i=0; $i<count($arr); $i++) {
		$arrNew[$i] = $arr[(count($arr)-$i-1)];
	}      
return ($arrNew);
}

// 5 Поиск данного значения в массиве циклом
function my_in_array ($sought, $arr)
	{
		for ($i=0; $i<count($arr); $i++) { 
			if ($sought == $arr[$i]) {
				$result = "Искомая позиция найдена! искали $sought в массиве";
			}
		}
//      return $result;
	}

// 6 Поиск данного ключа в массиве циклом
function my_array_key_exists($search_key, $arr)
{
	for ($i=0; $i<count($arr); $i++) {
			if (key($arr) == $search_key) {
				$result = "Искомый ключ $search_key присутствует в массиве";
				next($arr);
			} else {
				next($arr);
			}
		}
	return $result;
}

//  7 Меняет местами значения массива и их ключи
function my_array_flip ($arr) {
	for ($i=0; $i<count($arr); $i++) {
			$arrNew[$arr[$i]] = key($arr);	
			next($arr);
		}
	return $arrNew;
}

//  8 Выбирает все ключи массива
function my_array_keys ($arr) {
	for ($i=0; $i<count($arr); $i++) {
			$arrNew[$i] = key($arr);
			next($arr);
		}
	return $arrNew;	
}
?>