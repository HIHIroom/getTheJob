<?php
echo "<hr/>date() 與 gmdate()<hr/>";
$date_server=date("Y-m-d H:i:s");
echo "伺服器時間:$date_server<br/>";
$date_gmt=gmdate("Y-m-d H:i:s");
echo "格林威治時間:$date_gmt<br/>";

echo "<hr/>strftime() 與 gmstrftime()<hr/>";
$date_server=strftime("%A,%d %b %Y %H:%M:%S");
echo "伺服器時間:$date_server<br/>";
$date_gmt=gmstrftime("%A, %d %b %Y %H:%M:%S");
echo "格林威治時間:$date_gmt<br/>";

echo "<hr/>strtotime()<hr/>";
$dateStr = "2005-11-24 04:30:25";
$timeStamp=strtotime($dateStr);
echo $timeStamp;
?>