<?php
$filename="text.txt";
$file=fopen($filename,w); //w:д�룬r:ֻ��
fwrite($file,"zjmisaphpgaoshou");
fwrite($file,"hello \n");
fwrite($file,"this is a text");
fclose($file);

?>