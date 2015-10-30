<html>
<head>
<title>切分与合并字符串</title>
</head>
<body>
<pre>
<?php
$string="ABC,DE,F,GHI";    
$separator=",";
$limit=3;
$array = explode($separator, $string,$limit);//以,为标识将字符串切分成5个子字符串
print_r($array);
?>
</pre>
</body>
</html>
