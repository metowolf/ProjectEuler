<?php
$n=1001;
$ans=0;
for($i=intval($n/2);$i>=1;$i--){
	$id=$n-2*$i+2;
	$k=$id*$id;
	$ans+=4*$k-6*($id-1);
}
echo $ans+1;
