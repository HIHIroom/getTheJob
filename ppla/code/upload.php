<html>
<head>
<title>上傳表單</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
請選取要上傳的檔案:<br/>
<input type="file" name="fileUpload" /> <br/>
<input type="submit" value="送出資料" />
</form>
</body>
</html>

<?php
if ($_FILES["fileUpload"]["error"]==0){
	if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],iconv("UTF-8", "big5","./".$_FILES["fileUpload"]["name"]))){
		echo "上傳成功";
		echo "檔案名稱:".$_FILES["fileUpload"]["name"]."<br/>";
		echo "檔案類型:".$_FILES["fileUpload"]["type"]."<br/>";
		echo "檔案大小:".$_FILES["fileUpload"]["size"]."<br/>";
	}else{
		echo "上傳失敗";
		echo "<a href='javascript:window.history.back();'>回上一頁<a/>";
	}
}
?>