<?php
$raw=file_get_contents('https://projecteuler.net/project/resources/p022_names.txt');
$A=json_decode("[$raw]",1);
sort($A);
$ans='0';
foreach($A as $id=>$name){
	$score=array_sum(array_map(function($x){return ord($x)-ord('A')+1;},str_split($name)));
	$ans=bcadd($ans,$score*($id+1));
}
echo $ans;
