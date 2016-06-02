<?php
session_start();
?>
<html>
<head>
<title>第二頁</title>
</head>
<body>
<?php
if(!isset($_SESSION["member"]) || ($_SESSION["member"]=="")){
?>
	<a href="cookiesession.php">請登入會員</a>

<?php }else{echo "我是第二頁<br/>";
			echo "歡迎".$_SESSION["member"]."<br/>";?>

<a href="cookiesession.php?logout=true">登出系統</a><br/>
<a href="cookiesession.php">回上一頁</a>
<?php }?>
</body>
</html>