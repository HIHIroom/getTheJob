<?php
session_start();
if(!isset($_SESSION["member"]) || ($_SESSION["member"]=="")){
	if(isset($_POST["username"])&& isset($_POST["password"])){
		$username="admin";
		$password="1234";
		if(($_POST["username"]==$username) && ($_POST["password"]==$password)){
			$_SESSION["member"]=$username;
			if($_POST["check1"]==true){
				setcookie("username",$username);
			}
		}
	}
}
if(isset($_GET["logout"])&&($_GET["logout"]=="true")){
	unset($_SESSION["member"]);
	header("Location:cookiesession.php");
}
?>
<html>
<head>
<title>會員</title>
</head>
<body>
<?php
if(!isset($_SESSION["member"]) || ($_SESSION["member"]=="")){
if (isset($_COOKIE["username"])){
	$_POST["username"]=$_COOKIE["username"];}
?>
<form action="cookiesession.php" id="form1" method="POST" name="form1">
帳號<input type="text" name="username" id="username" value= "<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>"><br/>
密碼<input type="password" name="password" id="password"/><br/>
<input type="checkbox" name="check1" id="check1"/>記住帳號 <br/>
<input type="submit" name="button" value="登入" />
</form>
<?php
}else{
echo $_SESSION["member"]."您好，歡迎登入<br/>";
?>
<a href="cookiesession.php?logout=true">登出系統</a><br/>
<?php }?>
<a href="cookiesession1.php">下一頁</a>
</body>
</html>
