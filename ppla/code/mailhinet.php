<?php
$mailTo ="pplala0324@gmail.com"; 
$mailSubject="Mail Test";
$mailContent="Hello";
$mailHeader .="To:pplala0324@gmail.com";
$mailHeader .="From:ppla0528@gmail.com";

if (mail($mailTo,$mailSubject,$mailContent, $mailHeader)){
	echo "寄送成功";
}else{
	echo "寄送失敗";
}
?>