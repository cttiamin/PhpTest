<?php 
	function test() {
		global $var; //��ʱ�ı���$varת��Ϊȫ�ֱ���
		$var = 2;  //�ֲ����� ,����$varֵ
	}
	$var = 10 ; //ȫ�ֱ���
	test();
	echo $var;
?>