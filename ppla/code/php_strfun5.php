<?php
$showStr="Genius is one perecnt inspiration and ninety-nine precent perspiration.";
echo "天才是一分靈感加上九十九分努力。<hr/>";
$tok = strtok ($showStr," ");
while ($tok){
	echo "$tok<br>";
	$tok = strtok (" ");
}
?>