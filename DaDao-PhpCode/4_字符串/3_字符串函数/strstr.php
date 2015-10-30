<html>
<head>
<title>字符串的查找与处理</title>
</head>
<body>
<?php
$haystack="Hello world & sunyang";
$handle="&";
$string=strstr($haystack,$handle);//调用strstr()函数
echo $string;			//输出&和&之后的内容
?>

<?php
		//strsrt 从配开始输出
	$str="hello world w orld world !";
	$result=stristr($str,"W orld");	//stristr 忽略大小写
	echo $result;
?>
</body>
</html>
