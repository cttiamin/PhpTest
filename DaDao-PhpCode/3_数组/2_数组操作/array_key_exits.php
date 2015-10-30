<html>
<head>
<title>数组判断函数</title>
</head>
<body>
<?php
$balls= array(
	"排球"=>"vollyball",
	"乒乓球"=>"pingpong",
	"篮球"=>"basketball"
	);
$boolean=array_key_exists("乒乓球",$balls);
if ($boolean){						//确定键名是否在数组中
echo "乒乓球 在数组中<br>";
}else{
echo "乒乓球 不在数组中<br>";
}
$boolean2=array_key_exists("足球",$balls);
if ($boolean2){						//确定键名是否在数组中
echo "足球 在数组中<br>";
}else{
echo "足球 不在数组中<br>";
}

?>
</body>
</html>
