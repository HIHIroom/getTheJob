<?php
$showStr="金門縣 金城鎮 中興路 188-1號";
$showAddress = explode(" ",$showStr);
foreach ($showAddress as $value){
	echo $value."<br/>";
}
?>