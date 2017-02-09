<?php
$ans=0;
list($a,$b)=[1,2];
while($a<=4000000){
	if($a%2==0)$ans+=$a;
	list($a,$b)=[$b,$a+$b];
}
echo $ans;
