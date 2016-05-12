<?php
$testArray=array("紅茶","綠茶","麥茶","烏龍茶");
echo "第一個是",reset($testArray),",";
echo "第二個是",next($testArray),",";
echo "最後一個是",end($testArray),",";
echo "倒數第二個是",prev($testArray),"。";
?>
