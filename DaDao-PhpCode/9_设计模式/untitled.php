<?php
class OnePatter{
	private static $instance=null;
	private function __construct(){}
	public static function getinstance(){
		if(self::$instance==null){
			return new OnePatter();
		}
			return self::$instance;
	}
	public function printget(){
		echo "етЪЧ";
	}
}
$class=OnePatter::getinstance();
$class->printget();

?>