<?php
$xml=file_get_contents("simple.xml");	//得到文件中所有内容
print_r(simplexml_load_string($xml));	
?>
