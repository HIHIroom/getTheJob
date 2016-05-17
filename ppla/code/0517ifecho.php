<?php
$num=-2;
if($_POST["num1"] > 0){
	echo '輸入的數值是正數，數值為'.$_POST["num1"];
}else{
	echo '輸入的數值是負數，數值為'.$_POST["num1"];
}
echo "<hr/>";
if ($_POST["num1"]<10){
	echo "輸入的數值是個位數";
}elseif($_POST["num1"]>10 && $_POST["num1"]<100){
	echo "輸入的數值是十位數";
}elseif($_POST["num1"]>100 && $_POST["num1"]<1000){
	echo "輸入的數值為百位數";
}else{
	echo "輸入的數值超出判斷";
}
echo "<hr/>";

?>