<?php
echo "<hr/>使用strtotime()計算某日期時間在幾天幾月幾年的前後時間<hr/>";
$dateStr="2005-11-24 04:30:25";
$timeStamp=strtotime($dateStr);
echo "懷孕日期:".date("Y-m-d",strtotime("-10 months",$timeStamp))."<br/>";
echo "滿月日期:".date("Y-m-d",strtotime("+1 months",$timeStamp))."<br/>";
echo "周歲日期:".date("Y-m-d",strtotime("+1 year",$timeStamp))."<br/>";

echo "<hr/>checkdate()<hr/>";
$thisYear=date("Y");
if (checkdate(2, 29,$thisYear)){
	echo "今年 $thisYear 為閏年";
}else{
	echo "今年 $thisYear 不是閏年";
}
?>