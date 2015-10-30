<html>
<head>
<title>Perl正则表达式</title>
</head>
<body>
<?php
$subject= "欢迎来到长春aa";
$replacement="三扬科技";
$pattern="/a{2}/";
$replace = preg_replace($pattern,$replacement,$subject);
echo $replace;
?>
</body>
</html>
