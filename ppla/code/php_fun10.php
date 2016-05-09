<?php
function show($Num){
	if ($Num>=0){
		if ($Num ==0){
			return 1;
		}else {
			$resultNum = 1;
			for ($n=$Num;$n>0;$n--){
				$resultNum *=$n;
			}
			return $resultNum;
		}
	}
}
echo "5的階層為:".show(5);
?>