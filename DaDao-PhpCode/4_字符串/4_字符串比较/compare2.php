<html>
<head>
<title>�ַ����ıȽ�</title>
</head>
<body>
<?php
$string1="sunyang";
$string2="Sunyang";
$flag=strcmp($string1, $string2);
if($flag==0){
echo $string1." �� ".$string2." ���";
}elseif($flag>0){
echo $string1." ���� ".$string2;
}elseif($flag<0){
echo $string1." С�� ".$string2;
}
?>
</body>
</html>
