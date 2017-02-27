<?php
function isPrime($x){
	if($x<2)return false;
	if($x==2)return true;
	for($i=2;$i*$i<=$x;$i++)
		if($x%$i==0)return false;
	return true;
}
function cnt($a,$b){
	for($i=0;;$i++){
		$x=$i*$i+$a*$i+$b;
		if(!isPrime($x))return $i;
	}
}

$max=0;
for($a=-999;$a<=999;$a++)
	for($b=-999;$b<=999;$b++){
		$t=cnt($a,$b);
		if($t>$max){
			$max=$t;
			$ans=$a*$b;
		}
	}
echo $ans;
