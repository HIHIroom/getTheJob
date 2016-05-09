<?php
srand ((double)microtime()*1000000);
$randval = rand(0,6);
switch($randval){
	case "0";
		echo "知足常樂";
		break;
	case "1";
		echo "甘願做";
		break;
	case "2";
		echo "歡喜受";
		break;
	case "3";
		echo "十年生死兩茫茫";
		break;
	case "4";
		echo "不思量";
		break;
	case "5";
		echo "自難忘";
		break;
	default;
		echo "沒辭啦";
		break;
}

?>