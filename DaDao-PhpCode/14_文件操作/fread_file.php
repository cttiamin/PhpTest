<?php
$filename="text.txt";
$file=fopen($filename,r); //w:写入，r:只读
fwrite($file,"zjmisaphpgaoshou");
fwrite($file,"hello \n");
fwrite($file,"this is a text");

echo fread($file,12); //filesize($filename):获取 $filename文件中有多少字节
fclose($file);

?>