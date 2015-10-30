<?php
class Singleton{
	private static $instance = null;		
	private function __construct(){}		//私有类型的构造方法
	public static function getInstance(){		//确保只生成一个类实例
		if(self::$instance==null){
		return new Singleton ();
		}
	return self::$instance;
	}
	public function printStr(){
	echo"三扬科技";
	}
}
$class = Singleton::getInstance();				//获取单元素
$class->printStr();
?>
