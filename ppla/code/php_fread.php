<?php
$filename=fopen("21.gif","rb");
$contents=fread($filename,filesize("21.gif"));
fclose($filename);
header('Content-Type:image/gif;');
echo $contents;
?>