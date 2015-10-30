<?php
$dir="test";
if(is_dir($dir)){
	rmdir($dir);
}else{
	echo "文件夹不存在";
}
?>