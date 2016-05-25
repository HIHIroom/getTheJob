<?php
echo "getdate()函式的使用<hr/>";
$nowTime=getdate();
foreach ($nowTime as $key => $value){
	echo "$key => $value <br/>";
}
echo "<hr/>localtime()函式的使用<hr/>";

$nowTime=localtime(time(),1);
foreach($nowTime as $key => $value){
	echo "$key=>$value<br/>";
}

echo "<hr/>gettimeofday()<hr/>";
$nowTime=gettimeofday();
	foreach($nowTime as $key=>$value){
		echo "$key=>$value<br/>";
	}
	
?>