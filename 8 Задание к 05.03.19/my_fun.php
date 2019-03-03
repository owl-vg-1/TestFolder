<?php

// Функция для получения сообщения
function get_msg($text){
	$pat = '/<msg>(.*?)<\/msg>/ius';
	preg_match_all($pat, $text, $arr_msg);
	return $arr_msg[1];
}

//Функция для получения ника
function get_nik($text){
	$pat = '/<nik>(.*?)<\/nik>/ius';
	preg_match_all($pat, $text, $arr_nik);
	return $arr_nik[1];
}

//Функция для получения даты
function get_date($text){
	$pat = '/<date>(.*?)<\/date>/ius';
	preg_match_all($pat, $text, $arr_date);
	return $arr_date[1];
}

// Функция для вывода смайлов
function smile ($text) {
	$patterns = array(	'/:\)/iu',
						'/:\(/iu', 
						'/D-:/iu',
						'/:-\*/iu',
						'/:-P/iu'
					);

	$replacements = array(	'<img src=1.jpg style="height:25px">', 
							'<img src=2.jpg style="height:25px">', 
							'<img src=3.jpg style="height:25px">',
							'<img src=4.png style="height:25px">',
							'<img src=5.png style="height:25px">'
							);

	$text2 = preg_replace($patterns, $replacements, $text);
	return $text2; 
}

// Функция для использования bb кодов
function b_b ($text){
 	$patterns = array(	'/\[b\](.*)\[\/b\]/',
 						'/\[i\](.*)\[\/i\]/',
 						'/\[u\](.*)\[\/u\]/',
 						'/\[h3\](.*)\[\/h3\]/',
 						'/\[\*\](.*)\[\/\*\]/'
 					);

 	$replacements = array(	'<b>$1</b>',
 							'<i>$1</i>',
 							'<u>$1</u>',
 							'<h3>$1</h3>',
 							'<li>$1</li>'
 						);
	$text2 = preg_replace($patterns, $replacements, $text);
	return $text2; 
 }

// Функция для использования markdown кодов
function markdown ($text){
	$patterns = array(	'/\*\*(.*)\*\*/',
						'/\*(.*)\*/',
						'/~~(.*)~~/',
						'/^###(.*)/m',
						'/^\*(.*)/m'
					);

	$replacements = array(	'<b>$1</b>',
							'<i>$1</i>',
							'<u>$1</u>',
							'<h3>$1</h3>',
							'<li>$1</li>'
						);
	$text2 = preg_replace($patterns, $replacements, $text);
	return $text2; 
}

// Функция для проверки на нецензурные слова
function bad_word($text)
 	{
		$pat = '/дурак|редиска/iu';
		preg_match_all($pat, $text, $arr);
		return ($arr[0]);
 	}


?>