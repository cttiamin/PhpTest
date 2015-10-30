<html>
<head>
<title>字符串的查找与处理</title>
</head>
<body>
<?php
$haystack="Hello world & sunyang";
$handle="&";
echo strpos($haystack ,$handle); 						//显示"&"所在的位置
?>

<?php
	// 在目标出现的位置
	$aaa=strpos("hello-zhangjiaming","-");
	echo $aaa;
	
?>
</body>
</html>
