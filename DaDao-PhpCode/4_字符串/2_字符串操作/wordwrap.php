<html>
<head>
<title>字符串的显示与格式化</title>
</head>
<body>
<?php
$string="sunyangsunyangsunyang";
$width=7;
$break="\n<br>";
echo wordwrap($string,$width,$break,true);		//在字符串$string的每7个字符处强制换行
?>
</body>
</html>
