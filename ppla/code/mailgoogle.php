<?php

include("/phpMailer/class.phpmailer.php"); //匯入PHPMailer       

$mail= new PHPMailer(); //建立新物件        
$mail->IsSMTP(); //設定使用SMTP方式寄信        
$mail->SMTPAuth = true; //設定SMTP需要驗證        
        
$mail->CharSet = "utf-8"; //設定郵件編碼        

$mail->Username = "pplala0324@gmail.com"; //設定驗證帳號        
$mail->Password = "Zxc123456"; //設定驗證密碼        

$mail->From ="ppla0324@gmail.com"; //設定寄件者信箱        
$mail->FromName = "小小阿比"; //設定寄件者姓名        

$mail->Subject = "PHPMailer 測試信件"; //設定郵件標題        
$mail->Body = "大家好,       
這是一封測試信件!       
"; //設定郵件內容        
$mail->IsHTML(true); //設定郵件內容為HTML        
$mail->AddAddress("ppla0324@gmail.com", "阿比"); //設定收件者郵件及名稱        

if(!$mail->Send()) {        
echo "失敗: ";        
} else {        
echo "成功!";        
}    
?>	