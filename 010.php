<?php
function isPrime($n){
	if($n==2)return true;
	for($i=2;$i*$i<=$n;$i++)if($n%$i==0)return false;
	return true;
}

$ans=0;
for($i=2;$i<=2000000;$i++)if(isPrime($i))$ans+=$i;
echo $ans;

