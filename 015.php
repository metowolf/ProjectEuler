<?php
// C(40,20)=40!/(20!20!)
$a=1;
for($i=1;$i<=40;$i++)$a=bcmul($a,$i);
$b=1;
for($i=1;$i<=20;$i++)$b=bcmul($b,$i*$i);
echo bcdiv($a,$b);
