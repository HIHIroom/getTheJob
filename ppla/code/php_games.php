<?php
$hp=100;
$ap=10;
echo "人物狀態 <br/> HP：".$hp."  AP：".$ap."<br/>";

function games($hp,&$ap){
	$hp = $hp-50;
	$ap = $ap -5;
	echo "受到攻擊，剩餘HP：".$hp."  AP：".$ap."<br/>";
}
games($hp,$ap);
echo "人物狀態 <br/> HP：".$hp."  AP：".$ap."<br/>"; 
?>