<?php
$shape1=new SWFShape();
//ʡ�ԶԷ���$shape1����ز���

$m=new SWFMovie();
//ʡ�ԶԶ���$m����ز���

$s1=$m->add($shape1);

//ʡ�ԶԽű�������

//��Flash�����outputFile.swf�ļ�
$m->save('outputFile.swf');
?>