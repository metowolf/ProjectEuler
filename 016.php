<?php
$s=bcpow(2,1000);
echo array_sum(array_map('intval',str_split($s)));
