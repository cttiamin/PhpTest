<html>
<head>
<title>面向对象基础</title>
</head>
<body>
<?php
class People{
	public $name;
	function study(){
		echo" $this->name,我正在学习PHP……";
	}
}
$Tom=new People();									//创建对象Tom
$Tom->name="Tom";
$Tom->study();
echo"<br>";
$Lily=new People();									//创建对象Lily
$Lily->name="Lily";
$Lily->study();
echo"<br>";
$Paul=new People();									//创建对象Paul
$Paul->name="Paul";
$Paul->study();
?>
</body>
</html>

