<?php
	// /*逐行读取文本
 //               tid 表示读取第几条信息
	// */
	// $tid = $_GET['tid'];

	// $fh = fopen('./msg.txt', 'r');



	// $flags = 1;
	// while (($row = fgetcsv($fh)) != false) {

	// 	if ($flags == $tid) {
	// 		//print_r($row);
	// 		echo '<h1>', $row[0],'</h1>';
	// 		echo '<p>',$row[1],'</p>';
	// 	    	echo '<br/>';
	// 	}

	// 	$flags += 1;


	// }

$conn = mysql_connect('localhost','root','');

//准备
mysql_query('use gy1', $conn);
mysql_query('set names utf8', $conn);
$id = $_GET['tid'];

$sql = 'select * from memo where id =' . $id;

$rs = mysql_query($sql, $conn);
$row = mysql_fetch_assoc($rs);
?>
<html>
<head><title>详细信息</title></head>
<body>
<h1><?php echo $row['title']; ?></h1>
<p><?php echo $row['content']; ?></p>
</body>
</html>
