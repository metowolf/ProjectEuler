<?php

function i2s($x){
	$s=['','one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen'];
	$d=['','ten','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninety'];
	if($x==1000)return 'onethousand';
	if($x>=0&&$x<20)return $s[$x];
	if($x>=20&&$x<100)return $d[$x/10].$s[$x%10];
	if($x==100)return 'onehundred';
	return $s[$x/100].'hundredand'.i2s($x%100);
}

$ans=0;
for($i=1;$i<=1000;$i++)$ans+=strlen(i2s($i));
echo $ans-24;
