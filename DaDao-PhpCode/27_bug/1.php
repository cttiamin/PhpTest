<?php
	//本地文件引入包含漏洞,
$somfile=null;	//先定值为null,在地址栏里乱入值就不起作用了
if(isset($somefile)){	
	include($somefile);
}else{
	if(true){
		$somefile="a.php";
	}else{
		$somefile="b.php";
	}
	include($somefile);
}
?>