<?php
	//�����ļ��������©��,
$somfile=null;	//�ȶ�ֵΪnull,�ڵ�ַ��������ֵ�Ͳ���������
if(isset($somefile)){	
	include($somefile);
}else{
	if(true){
		$somefile="a.php";
	}else{
		$somefile="b.php";
	}
	include($somefile);
}
?>