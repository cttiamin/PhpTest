<html>
<head>
<title>POSIX正则表达式</title>
</head>
<body>
<?php
$expression = "3*5+i/6-12";
$pattern = "[+/]";
$limit=3;
$parts = split($pattern,$expression,$limit);		//从一个算术表达式中拆分3项
print_r($parts);
?>
</body>
</html>
