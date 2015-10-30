<html>
<head>
<title>数组判断函数</title>
</head>
<body>
<?php
$names = array("Peter", "Tom", "Paul", "Bob");
$boolean=in_array("peter",$names,true);
if ($boolean){						//确定元素是否在数组中
echo "peter 在数组中<br>";
}else{
echo "peter 不在数组中<br>";
}
$boolean2=in_array("Tom",$names,true);
if ($boolean2){						//确定元素是否在数组中
echo "Tom 在数组中<br>";
}else{
echo "Tom 不在数组中<br>";
}
?>
</body>
</html>
