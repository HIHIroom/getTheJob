<?php
header("content-type:text/html;charset=utf-8");
$db_link=@mysql_connect("localhost","root","qq740528");
if (!$db_link){
	die ("資料連結失敗辣");
}else{
	echo "資料連結成功辣<br/>";
	echo $db_link;
}
?>