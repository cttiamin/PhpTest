<html>
<head>
<title>字符串的比较</title>
</head>
<body>
<?php
$string1="sunyang";
$string2="Sunyang";
$flag=strcmp($string1, $string2);
if($flag==0){
echo $string1." 和 ".$string2." 相等";
}elseif($flag>0){
echo $string1." 大于 ".$string2;
}elseif($flag<0){
echo $string1." 小于 ".$string2;
}
?>
</body>
</html>
