<?php
	/*逐行读取文本
               tid 表示读取第几条信息
	*/
	$tid = $_GET['tid'];

	$fh = fopen('./msg.txt', 'r');



	$flags = 1;
	while (($row = fgetcsv($fh)) != false) {

		if ($flags == $tid) {
			//print_r($row);
			echo '<h1>', $row[0],'</h1>';
			echo '<p>',$row[1],'</p>';
		    	echo '<br/>';
		}

		$flags += 1;


	}

?>
