<?php
$ans=0;
for($y=1901;$y<=2000;$y++)
	for($m=1;$m<=12;$m++){
		$week=date('w',strtotime("$y-$m-01"));
		$ans+=$week==0;
	}
echo $ans;
