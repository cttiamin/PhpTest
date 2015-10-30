<html>
<head>
<title>异常处理</title>
</head>
<body>
<?php
try{
	$num=0;
	if($num==0){
		$errmsg="除数不能为零,请更改为其他值";
		throw new Exception($errmsg);
	}else {
		echo 50/$num;
	}
}catch(Exception $e){
	echo "出错原因：".$e->getMessage();
	echo "<br>";
	echo "错误文件路径：". $e-> getFile();
	echo "<br>";
	echo "错误代码行号：".$e-> getLine();
}
?>
</body>
</html>