<html>
<head>
<title>数组排序函数</title>
</head>
<body>
<?php
$balls=array(							//使用array结构定义数组
	4=>"乒乓球",
	1=>"排球",
	3=>"羽毛球",
	6=>"篮球",
);						
echo "排序前的结果为：";
foreach($balls as $key=>$value){ 			//使用foreach循环结构遍历数组
	echo "$key-$value  ";
} 
echo "<br>";
ksort($balls);							//使用ksort()函数对数组进行从低到高排序
echo"排序后的结果为：";
foreach($balls as $key=>$value){ 			//使用foreach循环结构遍历数组
	echo "$key-$value  ";
} 
?>
</body>
</html>
