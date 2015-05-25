<?php
	//print_r($_POST);
 	//fh 是一个变量，为资源类型的变量

	$handle = fopen('./msg.txt', 'a');//打开文件

	//往文件写内容
	//fwrite($fh, 'from php into txt');

	//关闭
	//fclose($fh);
	//保存文件的格式 cvs
	$str = $_POST['title'] . ',' . $_POST['content'] . "\n";
	$handle = fopen('./msg.txt', 'a');

	fwrite($handle, $str);
	fclose($handle);

?>
