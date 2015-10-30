<html>
<head>
<title>字符串的显示与格式化</title>
</head>
<body>
<?php
$format="%b,%c,%d,%u,%o,%x,%X";				//指定要输出显示的字符串格式
echo sprintf($format,42,42,-42,-42,42,42,42);			//使用echo才能输出显示字符串
echo "<br>";
printf($format,42,42,-42,-42,42,42,42);				//可以直接输出显示字符串
?>
</body>
</html>
