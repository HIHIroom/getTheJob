<?php
echo "<hr/>以下為Appserv下的資料夾<hr/>";
$fileDir = "C:\\AppServ";
$fileResource=opendir($fileDir);
while($fileList=readdir($fileResource)){
	if(is_dir($fileDir.'\\'.$fileList)) echo $fileList."<br/>";
}
rewinddir($fileResource);
echo "<hr/>以下為Appserv下的檔案<hr/>";

$fileDir = "C:\\AppServ";
$fileResource=opendir($fileDir);
while($fileList=readdir($fileResource)){
	if(is_file($fileDir.'\\'.$fileList)) echo $fileList."<br/>";
}

closedir($fileResource);
?>