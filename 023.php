<?php
function cnt($x){
	$m=intval(sqrt($x));
	$t=0;
	for($i=1;$i<=$m;$i++)
		if($x%$i==0)
			$t+=$i+$x/$i;
	if($m*$m==$x)$t-=$m;
	return $t-$x;
}

for($i=1;$i<=28123;$i++)$A[$i]=cnt($i);

$ans=0;
for($x=1;$x<=28123;$x++){
	$flag=0;
	for($a=1;$a<=$x/2;$a++){
		$b=$x-$a;
		if($A[$a]>$a&&$A[$b]>$b){
			$flag=1;
			break;
		}
	}
	if(!$flag)$ans+=$x;
}
echo $ans;
