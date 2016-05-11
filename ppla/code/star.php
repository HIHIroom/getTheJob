<?php
$o=9;
for ($i=1;$i<=$o;$i++){
	for ($j=1;$j<$i;$j++){
		echo "&nbsp"."&nbsp";
	}
	for ($p=$o*2-$i*2+1;$p>=1;$p--){
		echo "*";
	}
	echo "<br/>";
}
?>