<html>
<head>
<title>PHP内置函数</title>
</head>
<body>
<?php
$string = "exit();";
//eval($string);
//echo"这条语句不会被执行！";

$string="杯子";
$name='咖啡';
$str='这个$string 中装有 $name.<br>';
eval("\$str=\"$str\";");	//经过处理后会出输出变量
echo $str;

?>

</body>
</html>
