<?php
	//单元素模式
class OnePattern{
	private static $instance=null;
	private function __construct(){}
	public static function getInstance(){
		if(self::$instance==null){
		return new OnePattern();
		}
		return self::$instance;
	}
	public function printStr(){
	echo "这是单元素模式的应用";
	}
}
$class=OnePattern::getInstance();
$class->printStr();
echo "<br>";
//$aa=new OnePattern();
//$aa->printStr();

?>