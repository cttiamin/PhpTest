<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>while����Ӧ��</title>
</head>

<body>
<?php
	$a=0;
	while($a<5){	//������a��ֵ����5ʱ�˳�ѭ��
		$a = $a+1;	//ִ��һ��ѭ��������a��ֵ��1
		echo $a."<br>";
	}
	/*��ά�����ѭ��
	$abc=array(
	array("1"=>"1","2"=>"2","three"=>"3"),
	array("1"=>"1","2"=>"2","three"=>"3"),
	);
	while($key[]=$abc){
		print_r($key);
	} 
	*/

	//д�ĸ�ʽ
	//while($key=$array){
	//	$array[$key]=$array[$key];
	//}
?>
</body>
</html>
