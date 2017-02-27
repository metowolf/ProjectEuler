<?php
$data=[];
function permutation($items,$perms=[]){
	if(empty($items)){
		global $data;
		$data[]=join('',$perms)."\n";
	}
	else{
		for($i=count($items)-1;$i>=0;--$i){
			$newitems=$items;
			$newperms=$perms;
			list($foo)=array_splice($newitems,$i,1);
			array_unshift($newperms,$foo);
			permutation($newitems,$newperms);
		}
	}
}
permutation(range(0,9));
sort($data);
echo $data[1000000-1];
