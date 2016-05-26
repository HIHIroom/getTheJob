<html>
<head>
<title>多檔上傳</title>
</head>
<body>
<form action="uploads.php" method="POST" enctype="multipart/form-data">
請選取要上傳的檔案:<br/>
檔案1:<input type="file" name="fileUpload[]" /> <br/>
檔案2:<input type="file" name="fileUpload[]" /> <br/>
檔案3:<input type="file" name="fileUpload[]" /> <br/>
<input type="submit" value="送出資料" />
</form>
</body>
</html>

<?php
$i=count($_FILES["fileUpload"]["name"]);
for($j=0;$j<$i;$j++){
	if ($_FILES["fileUpload"]["error"][$j]==0){
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$j],"./".$_FILES["fileUpload"]["name"][$j])){
		echo $_FILES["fileUpload"]["name"][$j]."上傳成功<br/>";
		
	}else{
		echo "上傳失敗";
		echo "<a href='javascript:window.history.back();'>回上一頁<a/>";
	}
}
}
?>