<html>
<head>
<title>PHP5�е����ⷽ��</title>
</head>
<body>
<pre>
<?php
class Example {
	public function __call($method, $args) {
		echo $method."()����������,�����������£�";
		echo "<br>";
		print_r($args);
	}
}
$object = new Example();   
$object ->myMethod(1, 2); 
?>
</pre>
</body>
</html>
