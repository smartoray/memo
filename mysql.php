<?php
//连接数据库

$conn = mysql_connect('localhost','root','');

//发送查询
mysql_query('use gy1', $conn);
mysql_query('set names utf8', $conn);

//接收POST数据
//$sql = insert into memo (title, content, pubtime) values ($_POST['title'], $_POST['content'], time())
$sql = "insert into memo (title,content,pubtime) values ('" . $_POST['title'] . "','" . $_POST['content'] . "'," . time() . ")";

//echo $sql;

//执行sql语句
if (mysql_query($sql, $conn)) {
	echo '留言成功';
} else {
	echo '留言失败';
}


?>
