<?php
	$myarray =array("name"=>"ppla","Height"=>175,"Weight"=>55);
	
	echo $myarray["name"]."<br/>".$myarray["Height"]."<br/>".$myarray["Weight"]."<br/>";
	
	$weekArray = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	for ($i=0;$i<=6;$i++){
		echo $weekArray[$i]."<br/>";
	}
	
?>