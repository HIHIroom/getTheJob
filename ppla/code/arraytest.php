<?php
$myArray=array("myName"=>"ppla","myWeight"=>"50","myheight"=>"50");
foreach ($myArray as $value){
echo $value."<br/>";	
}
echo "<hr/>";
//一維陣列

$myArray2=array(array("學號"=>"100","姓名"=>"阿比","生日"=>"1985/03/25"),
				array("學號"=>"101","姓名"=>"阿B","生日"=>"1985/03/25"),
				array("學號"=>"102","姓名"=>"8bd","生日"=>"1985/03/25"),
				array("學號"=>"103","姓名"=>"阿比迪","生日"=>"1985/03/25")
);
foreach($myArray2 as $num){
	echo "學號:".$num["學號"].",";
	echo "姓名:".$num["姓名"].",";
	echo "生日:".$num["生日"]."<br/>";
}
echo "<hr/>";
print_r($myArray2);
echo "<hr/>";
var_dump($myArray2)	;
echo "<hr/>";
//二維陣列&顯示陣列內容函式

$testArray1=array("a"=>"甲","b"=>"乙","c"=>"丙");
$testArray2=array("c"=>"丁","d"=>"戊","e"=>"己");
$testArray3=array_merge($testArray1,$testArray2);
print_r($testArray3);
//陣列合併array_merge
		
echo "<hr/>";

$testArray1=array("a"=>"甲","b"=>"乙","c"=>"丙");
$testArray2=array("c"=>"丁","d"=>"戊","e"=>"己");
$testArray3=array_merge_recursive($testArray1,$testArray2);
print_r($testArray3);			
echo "<hr/>";
//陣列合併array_merge_recursive

$testArray=array(1,2,3,4,5,);
$testArray=array_chunk($testArray,3);
print_r($testArray);
echo "<hr/>";
//分割陣列為多維陣列

$testArray1=array("A","B","C");
$testArray2=array("甲","乙","丙");
$testArray=array_combine($testArray1,$testArray2);
print_r($testArray);
echo "<hr/>";
//將兩個陣列合併成為結合式陣列

$A="阿比";
$B="阿比迪";
$C="芭比狄";
$testArray=compact("A","B","C");
print_r($testArray);
?>