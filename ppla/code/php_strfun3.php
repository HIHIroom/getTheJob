<?php
$showStr1="大家";
$showStr2="***好***";
echo $showStr1.$showStr2."<br/>";
echo $showStr1.trim($showStr2,"*")."<br/>";
echo $showStr1.ltrim($showStr2,"*")."<br/>";
echo $showStr1.rtrim($showStr2,"*")."<br/>";
echo $showStr1.chop($showStr2,"*")."<br/>";
?>