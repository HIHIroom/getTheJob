<?php
function showData(){
	$i=func_num_args();
	if ($i==0){
		echo "沒有資料<hr/>";
	}else{
		echo "本班學生有:<br/>";
		$student = func_get_args();
		foreach($student as $data){
			echo $data."<br/>";
		}
		echo "最後一個為:".func_get_arg($i-1)."<br/>";
	}
}
showData();
showData("阿比","小六","俊偉","小彤","馬家","一勤");
?>