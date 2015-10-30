<?php
$xml=xml_parser_create('UTF-8');//����xml������
xml_set_element_handler($xml,'start_tag','end_tag');//������ʼ��ǩ�ͽ�����ǩ
xml_set_character_data_handler($xml,'content');//Ϊ$xmlָ���ַ����ݴ�����

xml_parse($xml,file_get_contents('simple.xml'));//ʹ��$xml����simple.xml�ļ�

function start_tag($xml,$tag,$attributes){
	echo "$tag<br>";
	foreach($attributes as $key=>$value){//�����ǩ������
		echo "$key='$value'";
	}
}
function end_tag($xml,$tag){
	echo "/$tag<br>";
}
function content($xml,$data){//��XML�ļ��еı�ǩ�����ݷ������$char_data��
	if (strlen(trim($data))>0) {

		foreach (split("\n",$data) as $line){
			echo "[".$line."]";
		}
		echo "<br>";
	}
}
?>