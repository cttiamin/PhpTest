<?php
	//��Ԫ��ģʽ
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
	echo "���ǵ�Ԫ��ģʽ��Ӧ��";
	}
}
$class=OnePattern::getInstance();
$class->printStr();
echo "<br>";
//$aa=new OnePattern();
//$aa->printStr();

?>