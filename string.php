<?php
	/*
	转义，
	在单引号中，只认识2个转义，\' 和 \\
	而双引号则多些
	*/

	$str = "hello \" \n world";
	echo $str;

	echo "\n\n";

	$str ='hello \" \n \' \\ world';
	echo $str;

	$str1 = 'hello';
	$str2 = 'world';

	echo '<br/>';
	$str = $str1 . $str2;

	echo $str;

?>


