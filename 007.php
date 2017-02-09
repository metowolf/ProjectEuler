<?php
function isPrime($n){
	if($n==2)return true;
	for($i=2;$i*$i<=$n;$i++)if($n%$i==0)return false;
	return true;
}
$cnt=0;
for($i=2;;$i++)if(isPrime($i)){
	if(++$cnt==10001){
		echo $i;
		break;
	}
}
