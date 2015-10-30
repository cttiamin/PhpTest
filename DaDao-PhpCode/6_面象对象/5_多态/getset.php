<html>
<head>
<title>PHP5中的特殊方法</title>
</head>
<body>
<?php
class Example {
	public $c = 0;
	public $array = array();
	public function __set($k, $v) {
		echo "使用__set()方法设置属性".$k."的值为：".$v."<br>";
		$this->array[$k] = $v; 
	}
	public function __get($k){
		echo $k."的值为".$this->array[$k];
	}
}
$object = new Example();   
$object->b = 1;	 			// 成员变量b不存在，所以会调用__set   
$object->c = 2; 			// 成员变量c是存在的，所以不调用__set，无任何输出   
$object->b; 				// 成员变量b不存在，所以会调用__get   
?>
</body>
</html>
