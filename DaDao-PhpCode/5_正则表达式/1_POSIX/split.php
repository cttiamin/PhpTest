<html>
<head>
<title>POSIX������ʽ</title>
</head>
<body>
<?php
$expression = "3*5+i/6-12";
$pattern = "[+/]";
$limit=3;
$parts = split($pattern,$expression,$limit);		//��һ���������ʽ�в��3��
print_r($parts);
?>
</body>
</html>
