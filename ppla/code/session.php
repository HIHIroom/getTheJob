<?php
session_start();
if(!isset($_SESSION["countOK"])){
	$dateStr = date("Y-m-d 23:59:59");
	if(isset($_COOKIE["counter"])){
		$counter = $_COOKIE["counter"];
		$counter++;
		setcookie("counter",$counter,strtotime($dateStr));
	}else{
			setcookie("counter","0",strtotime($dateStr));
			header("Location:session.php");
	}
	$_SESSION["countOK"]=1;
}else{
	$counter=$_COOKIE["counter"];
}
?>
<html>
<head>
<title>今日瀏覽次數</title>
</head>
<body>
</body>
</html>
<?php
echo "您今日瀏覽的次數為".$counter."次";
?>