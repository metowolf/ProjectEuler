<?php
function cnt($x){
	$sum=0;
	while($x){
		$sum+=pow($x%10,5);
		$x/=10;
	}
	return $sum;
}

$ans=0;
for($i=2;$i<=1000000;$i++){
	if($i==cnt($i))$ans+=$i;
}
echo $ans;
