<?php
$t='1';
for($i=1;$i<=100;$i++)$t=bcmul($t,$i);
echo array_sum(array_map('intval',str_split($t)));
