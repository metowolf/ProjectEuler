<?php
function cnt($n){
	$t=0;
	$limit=sqrt($n);
	for($i=1;$i<=$limit;$i++)if($n%$i==0)$t+=2;
	if($limit*$limit==$n)$t--;
	return $t;
}
for($i=1,$sum=0;;$i++){
	$sum+=$i;
	if(cnt($sum)>=500){
		echo $sum;
		break;
	}
}
