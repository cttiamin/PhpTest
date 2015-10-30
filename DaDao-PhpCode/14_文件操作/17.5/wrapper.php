<?php
$content=file_get_contents("file://C:/sunyang.txt");
if(strlen($content)>0){
	$file="C:/qq.txt";
	$f=fopen($file,'w');
	fwrite($f,$content);
	fclose($f);
	echo "成功写入文件".filesize($file)."字节<br><br>";
}
?>