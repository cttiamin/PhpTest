<html>
<head>
<title>˳�����</title>
</head>
<body>
<?php
function seq_sch($array, $n, $k){ 
$array[$n] = $k; 
for($i=0; $i<$n; $i++){ 
if($array[$i]==$k){ 
	return true;
	break; 						//�ҵ�Ŀ��ֵ������ѭ����
} 
} 
if ($i<$n){ 
return $i; 					//�ж��Ƿ������ĩβ
}else{ 
return false; 					//����Ŀ��ֵʧ��
} 
} 
$array=array(3,6,1,9,2,10);
$n=count($array);
$k=9;
if(seq_sch($array,$n,$k)){
	echo "˳����ҳɹ�";
}else{
	echo "˳�����ʧ��";
}
?>
</body>
</html>
