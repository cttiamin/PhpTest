<html>
<head>
<title>数组排序函数</title>
</head>
<body>
<?php
$languages['Tom'] = "PHP";					//定义关联数组$languages
$languages['Paul'] = "JAVA";
$languages['Lily'] = "C++";
echo"排序前的结果为：";
foreach($languages as $key=>$value){ 		//使用foreach循环结构遍历数组
	echo "$key-$value  ";
}
echo "<br>";
asort($languages); 							//使用asort()函数对数组进行从低到高排序
echo"排序后的结果为：";
foreach($languages as $key=>$value){ 		//使用foreach循环结构遍历数组
	echo "$key-$value  ";
}
?>
</body>
</html>
