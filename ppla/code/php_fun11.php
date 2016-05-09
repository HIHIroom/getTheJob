<?php
	function show ($Num){
		if ($Num==0){
			return 1;
		}else{
			return $Num * show ($Num-1);
		}
	}
	echo "5的階層為".show(5);
?>