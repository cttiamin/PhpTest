<html>
<head>
<title>PHP内置函数</title>
</head>
<body>
<?php
$sunyang = "123三扬科技";					//定义字符串类型的变量
echo "\$sunyang的原值为：".$sunyang;
echo "<br>";
settype($sunyang,"integer");			//使用settype()为变量设置数据类型
echo "\$sunyang的新值为：".$sunyang;
?>
</body>
</html>
