<?php
$content=file_get_contents("file://C:/sunyang.txt");
if(strlen($content)>0){
	$file="C:/qq.txt";
	$f=fopen($file,'w');
	fwrite($f,$content);
	fclose($f);
	echo "�ɹ�д���ļ�".filesize($file)."�ֽ�<br><br>";
}
?>