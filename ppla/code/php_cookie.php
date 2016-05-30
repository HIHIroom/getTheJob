<?php
$setResult=setcookie("Testcookie","這是cookie的內容");
?>
<html>
<head>
<title>cookie</title>
</head>
<body>
<?php
if($setResult){
	if(isset($_COOKIE["Testcookie"])){
		echo "Cookie的內容為:".$_COOKIE["Testcookie"];
	}else{
		echo "Cookie儲存成功,請重新整理頁面";
	}
}
?>
</body>
</html>