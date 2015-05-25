<?php
//顺序结构
	echo '起床','<br/>';
	echo '刷牙','<br/>';
	echo '吃早饭','<br/>';

	$heart = 'good';

//选择结构
	if ($heart == 'good')
		echo 'good lucky!','<br/>';

//循环结构
	$rice = 1;
	while ($rice <= 10) {
		echo '没饱：',$rice,'<br/>';
		$rice += 1;
	}
	echo '吃了',$rice,'份，终于饱了';

?>
