<?php
function gcd($a,$b){
	return $b?gcd($b,$a%$b):$a;
}

function lcm($a,$b){
	return $a/gcd($a,$b)*$b;
}

$ans=1;
for($i=1;$i<=20;$i++)$ans=lcm($ans,$i);
echo $ans;
