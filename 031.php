<?php
$coins=[1,2,5,10,20,50,100,200];

$way[0]=1;
for($i=1;$i<=200;$i++)$way[$i]=0;
foreach($coins as $coin)
	for($i=$coin;$i<=200;$i++)
		$way[$i]+=$way[$i-$coin];
echo $way[200];
