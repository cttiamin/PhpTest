<html>
<head>
<title>二分查找</title>
</head>
<body>
<?php
function bin_sch($array, $low, $high, $k){ 
if ($low <= $high){ 
$mid = intval(($low+$high)/2); 
if ($array[$mid] == $k){ 
return true; 
}elseif ($k < $array[$mid]){ 
return bin_sch($array, $low, $mid-1, $k); 
}else{ 
return bin_sch($array, $mid+1, $high, $k); 
} 
} 
return false; 
} 
$array=array(3,6,1,9,2,10);
$low=min(3,6,1,9,2,10);
$high=max(3,6,1,9,2,10);
$k=8;
if(bin_sch($array,$low,$high,$k)){
	echo "二分查找成功";
}else{
	echo "二分查找失败";
}
?>
</body>
</html>
