<html>
<head>
<title>顺序查找</title>
</head>
<body>
<?php
function seq_sch($array, $n, $k){ 
$array[$n] = $k; 
for($i=0; $i<$n; $i++){ 
if($array[$i]==$k){ 
	return true;
	break; 						//找到目标值后跳出循环体
} 
} 
if ($i<$n){ 
return $i; 					//判断是否到数组的末尾
}else{ 
return false; 					//查找目标值失败
} 
} 
$array=array(3,6,1,9,2,10);
$n=count($array);
$k=9;
if(seq_sch($array,$n,$k)){
	echo "顺序查找成功";
}else{
	echo "顺序查找失败";
}
?>
</body>
</html>
