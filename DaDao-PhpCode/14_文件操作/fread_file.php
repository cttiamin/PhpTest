<?php
$filename="text.txt";
$file=fopen($filename,r); //w:д�룬r:ֻ��
fwrite($file,"zjmisaphpgaoshou");
fwrite($file,"hello \n");
fwrite($file,"this is a text");

echo fread($file,12); //filesize($filename):��ȡ $filename�ļ����ж����ֽ�
fclose($file);

?>