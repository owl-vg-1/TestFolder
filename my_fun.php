<?php
 	function b_b ($text)
 	{
 		$patterns = array(	'/\[b\](.*)\[\/b\]/',
 							'/\[i\](.*)\[\/i\]/',
 							'/\[u\](.*)\[\/u\]/',
 							'/\[img\](.*)\[\/img\]/'
 							 
 						);

 		$replacements = array(	'<b>$1</b>',
 								'<i>$1</i>',
 								'<u>$1</u>',
 								'<img src="$1">'								 
 							);

		$text2 = preg_replace($patterns, $replacements, $text);
		return $text2; 
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

 	function bad_word($text)
 	{
 			$pat = '/дурак|редиска/iu';
			preg_match($pat, $text, $arr);
			print_r($arr);
 	}






?>