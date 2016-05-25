<?php
echo "<hr/>";
echo $_SERVER["PHP_SELF"]."<br/>";
echo $_SERVER["SCRIPT_FILENAME"]."<br/>";
echo __FILE__;

echo "<hr/>realpath() dirname()與 basename() <hr/>";
echo "目前檔案所在的路徑為:".realpath(".")."<br/>";
echo "完整的檔案路徑為:".__FILE__."<br/>";
echo "資料夾為:".dirname(__FILE__)."<br/>";
echo "資料夾為:".__DIR__."<br/>";
echo "檔名為:".basename(__FILE__)."<br/>";

echo "<hr/> pathinfo()取得路徑資訊 <hr/>";

$path=__FILE__;
echo pathinfo($path,PATHINFO_DIRNAME)."<br/>";
echo pathinfo($path,PATHINFO_BASENAME)."<br/>";
echo pathinfo($path,PATHINFO_EXTENSION)."<br/>";
echo pathinfo($path,PATHINFO_FILENAME)."<br/>";
$pathData=pathinfo($path);
print_r($pathData);
?>