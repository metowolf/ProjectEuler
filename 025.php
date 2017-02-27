<?php
$ans=1;
list($a,$b)=['1','1'];
while(strlen($a)<1000){
	list($a,$b)=[$b,bcadd($a,$b)];
	$ans++;
}
echo $ans;
