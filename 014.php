<?php
function collatz($x){
	$cnt=0;
	while($x!=1){
		$x=$x%2?3*$x+1:$x/2;
		$cnt++;
	}
	return $cnt;
}

$max=0;
for($i=1;$i<1000000;$i++){
	$t=collatz($i);
	if($t>$max){
		$max=$t;
		$ans=$i;
	}
}
echo $ans;
