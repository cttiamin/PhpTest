<?php
$dir="test";
if(is_dir($dir)){
	rmdir($dir);
}else{
	echo "�ļ��в�����";
}
?>