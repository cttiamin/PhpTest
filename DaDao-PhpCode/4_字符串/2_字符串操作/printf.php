<html>
<head>
<title>�ַ�������ʾ���ʽ��</title>
</head>
<body>
<?php
$format="%b,%c,%d,%u,%o,%x,%X";				//ָ��Ҫ�����ʾ���ַ�����ʽ
echo sprintf($format,42,42,-42,-42,42,42,42);			//ʹ��echo���������ʾ�ַ���
echo "<br>";
printf($format,42,42,-42,-42,42,42,42);				//����ֱ�������ʾ�ַ���
?>
</body>
</html>
