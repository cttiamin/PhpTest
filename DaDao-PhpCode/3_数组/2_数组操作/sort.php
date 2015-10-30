<html>
<head>
<title>数组排序函数</title>
</head>
<body>
<?php
$number=array(91,63,22,84,45,73,16);				//定义数组$number
echo"排序前的结果为： ";
foreach($number as $value){							//使用foreach循环结构遍历数组
	echo $value." ";
} 
echo "<br>";
echo"排序后的结果为： ";
sort($number); 										//使用sort()函数排序数组$number
foreach($number as $value){							//使用foreach循环结构遍历数组
	echo $value." ";
} 
?>
</body>
</html>
