<?php
$ans1=$ans2=0;
for($i=1;$i<=100;$i++){
	$ans1+=$i;
	$ans2+=$i*$i;
}
echo $ans1*$ans1-$ans2;
