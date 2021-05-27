<?php 
class classname{
	private $attribute;
	function __get($name){
		return $this->$name;
	}
	function __set($name, $value){
		if(($name="attribute") && ($value<=100))
			$this->$name=$value;
	}
}
$a = new classname();
$a->attribute="12";
echo $a->attribute;
?>