<html>
<head>
<title>POSIX正则表达式</title>
</head>
<body>
<?php
$pattern="长春";
$string="欢迎来到长春";
$replacement ="三扬科技";
$replace=ereg_replace($pattern,$replacement,$string); 
echo $replace;
?>
</body>
</html>
