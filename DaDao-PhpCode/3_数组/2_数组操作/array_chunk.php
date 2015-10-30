<html>
<head>
<title>数组的拆分</title>
</head>
<body>
<pre>
<?php
$balls=array("排球","乒乓球","篮球");
$chunk=array_chunk($balls,2,true);			//合并数组a1和数组a2
print_r($chunk);
?>
</pre>
</body>
</html>
