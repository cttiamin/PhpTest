<?php
$dir="test/";
if(!is_dir($dir)){	//判断目录是否存在
	mkdir($dir);
}else{
	echo "该文件夹已经存在";
}
?>