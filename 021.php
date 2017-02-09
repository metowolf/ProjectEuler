<?php
function cal($x){
	$m=intval(sqrt($x));
	$t=0;
	for($i=1;$i<=$m;$i++)
		if($x%$i==0)
			$t+=$i+$x/$i;
	if($m*$m==$x)$t-=$m;
	return $t-$x;
}
for($i=1;$i<=10000;$i++)$D[$i]=cal($i);
$ans=0;
for($i=1;$i<=10000;$i++)
	if(($t=$D[$i])!=$i)
		if($t>0&&$t<=10000&&$D[$t]==$i)$ans+=$i;
echo $ans;
