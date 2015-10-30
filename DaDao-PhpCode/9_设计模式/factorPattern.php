<?php
	//工厂模式
	abstract class Product{
		abstract function getName();
	}
	class ProductA extends Product{
		public function getName(){
			echo "I an A";
		}
	}
	class ProductB extends Product{
		public function getName(){
			echo "I am B";
		}
	}
	class ProductFactor{
		static function Create($name){
			switch($name){
			case "A";return new ProductA();
			case "B";return new ProductB();
			}
		}
	}
$product=ProductFactor ::Create("A");
$product->getName();
echo "<br>";
$product=ProductFactor ::Create("B");
$product->getName();
?>