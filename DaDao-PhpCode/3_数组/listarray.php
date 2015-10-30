<?php
	//遍历一维
	$beijing=array("haidian"=>"zhonghuanchuen","dongcheng"=>"wojia");
	foreach($beijing as $aa=>$bb){
		echo "$aa : $bb <br>";
	}
	
	//使用嵌套遍历二维数组

	$china=array(
		"jilin"=>array("长春"=>"汽车城","吉林"=>"雾凇城"),
		"liaoling"=>array("1"=>"沈阳","2"=>"铁岭"),
	);
	foreach($china as $city){
		foreach($city as $key=>$value){
			echo"$key : $value <br> ";
		}
	}
	
	//for 遍历数组
	$languages=array("日语","日语","韩语","英语");
		for($i=0;$i<count($languages);$i++){
			$value=$languages[$i];
			echo "$i:$value<br>";
		}	
		
	//while 遍历
	$letters=array(								//使用array()结构创建数组
	0=>"a",
	1=>"b",
	2=>"c"
	);
	reset($letters);			//将数组内部指针倒回到第一个单元
	while(list($key,$value)=each($letters)){
	print"$key --- $value<br>";
	}
	
?>