<?php
$path=__FILE__;
clearstatcache();
$pathData = stat($path);
print_r($pathData);
echo "<hr/>";
$pathData = lstat($path);
print_r($pathData);

echo "<hr/>個別取得檔案資訊<hr/>";

$path=__FILE__;
clearstatcache();
echo fileinode($path)."<br/>";
echo fileperms($path)."<br/>";
echo fileowner($path)."<br/>";
echo filegroup($path)."<br/>";
echo filesize($path)."<br/>";
echo fileatime($path)."<br/>";
echo filemtime($path)."<br/>";
echo filectime($path)."<br/>";
echo filetype($path)."<br/>";

echo "<hr/>查詢磁碟空間及剩餘空間<hr/>";

printf("磁碟空間 : %s bytes <br/> 剩餘空間 : %s bytes",number_format(disk_total_space("."))
,number_format(disk_free_space(".")));
?>