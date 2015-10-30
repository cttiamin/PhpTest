<?php
$filename="text.txt";
$file=fopen($filename,w); //w:Ð´Èë£¬r:Ö»¶Á
fwrite($file,"zjmisaphpgaoshou");
fwrite($file,"hello \n");
fwrite($file,"this is a text");
fclose($file);

?>