<?php
function cnt($x){
	while($x%2==0)$x/=2;
	while($x%5==0)$x/=5;
	if($x==1)return 0;
	for($t=9,$ans=1;$t%$x;$t=$t*10+9,$t%=$x,$ans++);
	return $ans;
}
$max=0;
for($i=1;$i<1000;$i++){
	$t=cnt($i);
	if($t>$max){
		$max=$t;
		$ans=$i;
	}
}
echo $ans;
