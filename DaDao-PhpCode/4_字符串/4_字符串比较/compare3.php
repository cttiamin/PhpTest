<html>
<head>
<title>字符串的比较</title>
</head>
<body>
<?php
$string1="sunyang";
$string2="sun";
$len=3;
$flag=strncmp($string1,$string2,$len);						//比较字符串
if($flag==0){									//判断字符串的大小
echo $string1." 和 ".$string2." 相等";
}elseif($flag>0){
echo $string1." 大于 ".$string2;
}elseif($flag<0){
echo $string1." 小于 ".$string2;
}
?>
</body>
</html>
