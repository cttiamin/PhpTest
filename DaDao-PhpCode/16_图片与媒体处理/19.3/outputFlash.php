<?php
$shape1=new SWFShape();
//ʡ�ԶԷ���$shape1����ز���

$m=new SWFMovie();
//ʡ�ԶԶ���$m����ز���

$s1=$m->add($shape1);

//ʡ�ԶԽű�������

//��Flash�����ҳ��
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>