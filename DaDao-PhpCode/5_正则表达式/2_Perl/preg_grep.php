<?php
		//preg_grep ���ڲ���
	$array=array("1","aa","XYZ","?","3","25");
	$reslut=preg_grep("/^\d+$/",$array,PREG_GREP_INVERT); //\d �����ֿ�ͷ,+(����)������һ������ , ^��ʼ$����,preg_grep_invert ������ķ��� 
	print_r($reslut);
	
?>