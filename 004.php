<?php
$ans=0;
for($i=100;$i<=999;$i++)
	for($j=$i;$j<=999;$j++){
		$n=$i*$j;
		if(strval($n)==strrev(strval($n)))
			$ans=max($ans,$n);
	}
echo $ans;
