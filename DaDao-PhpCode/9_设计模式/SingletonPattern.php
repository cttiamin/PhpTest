<?php
class Singleton{
	private static $instance = null;		
	private function __construct(){}		//˽�����͵Ĺ��췽��
	public static function getInstance(){		//ȷ��ֻ����һ����ʵ��
		if(self::$instance==null){
		return new Singleton ();
		}
	return self::$instance;
	}
	public function printStr(){
	echo"����Ƽ�";
	}
}
$class = Singleton::getInstance();				//��ȡ��Ԫ��
$class->printStr();
?>
