<?php
header ("Content-Type:text/html;charset=utf-8");
include ("connMysql.php");
$seldb=@mysql_select_db("class");
if (!$seldb) die("資料庫選擇成功辣");
$sql_query = "SELECT * FROM students";
$result = mysql_query($sql_query);
while($row_result=mysql_fetch_assoc($result)){
	foreach($row_result as $key=>$value){
		echo $key."=".$value."<br/>";
	}
	echo "<hr/>";
}
?>