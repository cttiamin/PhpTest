<?php
	//����һά
	$beijing=array("haidian"=>"zhonghuanchuen","dongcheng"=>"wojia");
	foreach($beijing as $aa=>$bb){
		echo "$aa : $bb <br>";
	}
	
	//ʹ��Ƕ�ױ�����ά����

	$china=array(
		"jilin"=>array("����"=>"������","����"=>"��ڡ��"),
		"liaoling"=>array("1"=>"����","2"=>"����"),
	);
	foreach($china as $city){
		foreach($city as $key=>$value){
			echo"$key : $value <br> ";
		}
	}
	
	//for ��������
	$languages=array("����","����","����","Ӣ��");
		for($i=0;$i<count($languages);$i++){
			$value=$languages[$i];
			echo "$i:$value<br>";
		}	
		
	//while ����
	$letters=array(								//ʹ��array()�ṹ��������
	0=>"a",
	1=>"b",
	2=>"c"
	);
	reset($letters);			//�������ڲ�ָ�뵹�ص���һ����Ԫ
	while(list($key,$value)=each($letters)){
	print"$key --- $value<br>";
	}
	
?>