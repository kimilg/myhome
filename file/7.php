<?php 
$file='readme.txt';
$newfile='example.txt.bak';
if(!copy($file, $newfile)){
	echo "fail";
}
?>