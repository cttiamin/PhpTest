<?php
$dir="test/";
if(is_dir($dir)){
	$dir_res=opendir($dir);
	while($filename=readdir($dir_res)){
		echo $filename."<br>";
	}
}else{
	echo "Ŀ¼�����ڻ��߲���һ����Ч��Ŀ¼";
}
closedir($dir_res);
rmdir($dir_res);
?>