<html>
<head>
<title>����������</title>
</head>
<body>
<?php
class People{
	public $name;
	function study(){
		echo" $this->name,������ѧϰPHP����";
	}
}
$Tom=new People();									//��������Tom
$Tom->name="Tom";
$Tom->study();
echo"<br>";
$Lily=new People();									//��������Lily
$Lily->name="Lily";
$Lily->study();
echo"<br>";
$Paul=new People();									//��������Paul
$Paul->name="Paul";
$Paul->study();
?>
</body>
</html>

