<?php
$xml=xml_parser_create('UTF-8');//建立xml解析器
xml_set_element_handler($xml,'start_tag','end_tag');//解析开始标签和结束标签
xml_set_character_data_handler($xml,'content');//为$xml指定字符数据处理函数

xml_parse($xml,file_get_contents('simple.xml'));//使用$xml解析simple.xml文件

function start_tag($xml,$tag,$attributes){
	echo "$tag<br>";
	foreach($attributes as $key=>$value){//输出标签的属性
		echo "$key='$value'";
	}
}
function end_tag($xml,$tag){
	echo "/$tag<br>";
}
function content($xml,$data){//将XML文件中的标签体内容放入变量$char_data中
	if (strlen(trim($data))>0) {

		foreach (split("\n",$data) as $line){
			echo "[".$line."]";
		}
		echo "<br>";
	}
}
?>