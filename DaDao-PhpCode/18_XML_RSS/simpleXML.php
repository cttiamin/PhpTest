<?php
$xml=file_get_contents("simple.xml");	//�õ��ļ�����������
print_r(simplexml_load_string($xml));	
?>
