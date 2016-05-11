<?php
$s=array(array("ppla",175,55),
		 array("bbd",175,65),
		 array("bss",165,90));
		 
for ($j=0;$j<3;$j++){
	for ($i=0;$i<3;$i++){
	echo $s[$j][$i]."<br/>";
	}
	echo "<br/>";
}

$num = count ($s);
for ($q=0;$q<$num;$q++){
	foreach ($s[$q] as $value){
	echo $value."</br>";
}
echo "<br/>";
}


foreach ($s as $s1 => $s2 ){
			 echo "索引".$s1."的值是".$s2[0]."<br/>";
		 }
?>