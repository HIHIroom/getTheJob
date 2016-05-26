<?php
echo "<hr/>使用scandir--以下為Appserv下的檔案<hr/>";

$fileDir = "C:\\AppServ";
$fileResource=scandir($fileDir);
foreach($fileResource as $fileName){
	if(is_dir($fileDir.'\\'.$fileName)) echo $fileName."<br/>";
}

echo "<hr/>使用scandir--以下為Appserv下的檔案<hr/>";

$fileDir = "C:\\AppServ";
$fileResource=scandir($fileDir);
foreach($fileResource as $fileName){
	if(is_file($fileDir.'\\'.$fileName)) echo $fileName."<br/>";
}
print_r ($fileResource);
?>