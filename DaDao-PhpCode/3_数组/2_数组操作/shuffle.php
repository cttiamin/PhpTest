<html>
<head>
<title>数组排序函数</title>
</head>
<body>
<?php
$days=array("星期一","星期二","星期三","星期四","星期五","星期六","星期日");
shuffle($days);
foreach($days as $value){ 					//使用foreach循环结构遍历数组
	echo $value." ";
} 
?>
</body>
</html>
