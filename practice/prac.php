<?php 
$products=array('tires'=>100, 'oil'=>10, 'spark'=>4);
$products2=array('tires'=>100, 'oil'=>10, 'spark'=>4);
reset($products);

if($products===$products2){
foreach($products as $key => $value){
	echo "$key - $value<br />";
}
}


?>
