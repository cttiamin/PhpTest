<html>
<head>
<title>�з���ϲ��ַ���</title>
</head>
<body>
<pre>
<?php
$string="ABC,DE,F,GHI";    
$separator=",";
$limit=3;
$array = explode($separator, $string,$limit);//��,Ϊ��ʶ���ַ����зֳ�5�����ַ���
print_r($array);
?>
</pre>
</body>
</html>
