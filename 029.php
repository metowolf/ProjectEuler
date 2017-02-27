<?php
for($a=2;$a<=100;$a++)
	for($b=2;$b<=100;$b++){
		$c=bcpow($a,$b);
		$ans[]=$c;
	}
$ans=array_unique($ans);
echo count($ans);
