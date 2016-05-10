<?php
$student1 = array("ppla",175,55);
$student2 = array("bbd",175,65);
$student3 = array("bss",165,90);

$s = array($student1,$student2,$student3);
for ($j=0;$j<3;$j++){
	for ($i=0;$i<3;$i++){
	echo $s[$j][$i]."<br/>";
	}
	echo "<br/>";
}
?>