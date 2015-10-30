<?php
$dir="test/";
if(is_dir($dir)){
	$dir_res=opendir($dir);
	while($filename=readdir($dir_res)){
		echo $filename."<br>";
	}
}else{
	echo "目录不存在或者不是一个有效的目录";
}
closedir($dir_res);
rmdir($dir_res);
?>