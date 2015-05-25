 <?php
 // 	$fh = fopen('./msg.txt', 'r');

	// $i = 1;
 // 	while (($row = fgetcsv($fh)) != false) {
 // 		//if ($i == $tid)
 // 			//print_r($row);
 // 			echo '<li><a href="readmessg.php?tid=', $i, '">', $row[0],  '</a>','</li>';
	// 		$i += 1;
 // 	}

$conn = mysql_connect('localhost','root','');

//准备
mysql_query('use gy1', $conn);
mysql_query('set names utf8', $conn);

//发送查询
$sql = 'select * from memo';
$rs =mysql_query($sql, $conn);

while ($row = mysql_fetch_assoc($rs)) {
	//print_r($row);
	//echo '<li>', $row['title'], '</li>';
	//echo '<li><a href="readmessg.php?tid=',$row['id'],' ">', $row['title'], '</a></li>';

	//echo "<li>{$row['title']}</li>";
	echo "<li><a href=\"readmessg.php?tid={$row['id']}\">{$row['title']}</a></li>";
}
 ?>
