<?php
$hp=50;
$ap=5;
echo "�ͩR:".$hp." ����I��:".$ap."<br/>";
 function damage($hp,&$ap){
	 
     $Survival=$hp-23;
	  $ap=$ap-5;
	 echo "�i�J�ƥ��ͩR����23�l�`�ѤU".$Survival."     ����I�Ʀ���5�ѤU".$ap."<br/>";
	 
 }

damage($hp,$ap);

echo "�ͩR:".$hp." ����I��:".$ap;

?>