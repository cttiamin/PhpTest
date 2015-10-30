<?php
$newfilename="C:/a.txt";
if(unlink($newfilename)){
	echo "文件删除成功";
}else{
	echo "文件不存在";
}
?>