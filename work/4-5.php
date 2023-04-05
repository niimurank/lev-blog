<?php
class Animal {
	public $cry = 'bowbow!';
	public $nya = 'nyanya!';
	function bow(){
		echo $this->cry.PHP_EOL;
	}

	function nya(){
		echo $this->nya.PHP_EOL;
	}
}

$dog = new Animal;
$dog->bow();

$cat = new Animal;
$cat->nya();
?>
