<html>
<head>
<title>PHP5�е����ⷽ��</title>
</head>
<body>
<?php
class Example{
public function __toString(){
	return "����Ƽ�";
}
}
$object= new Example();
echo $object;
?>
</body>
</html>
