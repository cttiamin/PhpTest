<?php
try{
	$error="总是会出抛该异";	
	throw new Exception($error);
	echo "这里不会被执行";
}catch (Exception $e){
	echo "处理异常".$e->getMessage();
}

?>