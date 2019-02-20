<?php

function bad_word($text)
 	{
		$pat = '/дурак|редиска/iu';
		preg_match_all($pat, $text, $arr);
		return ($arr[0]);
 	}

function smile ($text)
 	{
 	$patterns = array(	'/:\)/iu',
 						'/:-\)/iu', 
 						'/;-\)/iu'
 					);

 	$replacements = array(	'<img src=1.jpg style="height:25px">', 
 							'<img src=2.jpg style="height:25px">', 
 							'<img src=3.jpg style="height:25px">'
 							);

	$text2 = preg_replace($patterns, $replacements, $text);
	return $text2; 
 	}

function b_b ($text)
 	{
 		$patterns = array(	'/\[b\](.*)\[\/b\]/',
 							'/\[i\](.*)\[\/i\]/',
 							'/\[u\](.*)\[\/u\]/'
 						);

 		$replacements = array(	'<b>$1</b>',
 								'<i>$1</i>',
 								'<u>$1</u>',
 							);
		$text2 = preg_replace($patterns, $replacements, $text);
		return $text2; 
 	}


function markdown ($text)
 	{
 		$patterns = array(	'/\*\*(.*)\*\*/',
 							'/\*(.*)\*/',
 							'/##(.*)/'
 						);

 		$replacements = array(	'<b>$1</b>',
 								'<i>$1</i>',
 								'<h2>$1</h2>',
 							);
		$text2 = preg_replace($patterns, $replacements, $text);
		return $text2; 
 	}











 	



 	function bad_word_replacement ($text)
 	{
 		$patterns = array(	'/дурак/iu',
 							'/редиска/iu' 
 						);
 		$replacements = array(	'<img src=4.jpg style="height:45px">', 
 								'<img src=4.jpg style="height:45px">' 
 							);
		$text2 = preg_replace($patterns, $replacements, $text);
		return $text2; 
 	}






?>