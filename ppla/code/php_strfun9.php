<?php
$showStr = "My name is David.";
echo $showStr."<hr/>";
$showArray = count_chars($showStr, 1);
foreach ($showArray as $i => $val){
	echo "字元".chr($i)."出現了 $val 次<br/>";

}
echo "<hr/>";
$showArray1= strlen($showStr);
echo $showArray1;
echo "<hr/>";

$showArray2= substr_count($showStr,"i");
echo $showArray2;
echo "<hr/>";

$showArray3= str_word_count($showStr);
echo $showArray3;
echo "<hr/>";

$showArray4= strpos($showStr,"i");
echo $showArray4;
echo "<hr/>";
?>