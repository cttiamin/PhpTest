<html>
<head>
<title>其他常用数组函数</title>
</head>
<body>
<pre>
<?php
$balls= array(
	"排球"=>"vollyball",
	"乒乓球"=>"pingpong",
	"篮球"=>"basketball"
	);
$flip=array_flip($balls);
print_r($flip);
?>
</pre>
</body>
</html>
