<?php
$n=600851475143;
for($i=2;$i*$i<=$n;$i++)
	if($n%$i==0)
		while($n%$i==0)$n/=$i;
echo $n;
