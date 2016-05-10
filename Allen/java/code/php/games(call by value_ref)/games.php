<?php
$hp=50;
$ap=5;
echo "生命:".$hp." 行動點數:".$ap."<br/>";
 function damage($hp,&$ap){
	 
     $Survival=$hp-23;
	  $ap=$ap-5;
	 echo "進入副本生命受到23損害剩下".$Survival."     行動點數扣掉5剩下".$ap."<br/>";
	 
 }

damage($hp,$ap);

echo "生命:".$hp." 行動點數:".$ap;

?>