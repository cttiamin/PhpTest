<html>
<head>
<title>PHP5�е����ⷽ��</title>
</head>
<body>
<?php
class Example {
	public $c = 0;
	public $array = array();
	public function __set($k, $v) {
		echo "ʹ��__set()������������".$k."��ֵΪ��".$v."<br>";
		$this->array[$k] = $v; 
	}
	public function __get($k){
		echo $k."��ֵΪ".$this->array[$k];
	}
}
$object = new Example();   
$object->b = 1;	 			// ��Ա����b�����ڣ����Ի����__set   
$object->c = 2; 			// ��Ա����c�Ǵ��ڵģ����Բ�����__set�����κ����   
$object->b; 				// ��Ա����b�����ڣ����Ի����__get   
?>
</body>
</html>
