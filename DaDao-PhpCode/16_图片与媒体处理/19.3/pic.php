<?php
//����ͼ��
$sunyang=new SWFBitmap(file_get_contents("sunyang42.gif"));
//�������
$s=new SWFShape();
//��ͼ������Ϊ�����еĻ�����ɫ����
$imgs=$s->addFill($sunyang);
//��ͼ���������
$s->setRightFill($imgs);
//����ͼ���С���÷��ŷ�Χ
$s->movePenTo( 0, 0 );
$s->drawLineTo( $sunyang->getWidth(), 0 );
$s->drawLineTo( $sunyang->getWidth(), $sunyang->getHeight() );
$s->drawLineTo( 0, $sunyang->getHeight() );
$s->drawLineTo( 0, 0 );

//���嶯��
$m=new SWFMovie();
//���嶯����С
$m->setDimension($sunyang->getWidth()*4, $sunyang->getHeight()*4);
//���������붯��
$is=$m->add($s);
//���÷���λ��
$is->moveTo($sunyang->getWidth()*2, $sunyang->getHeight()*2);
//���÷�����ת
for($i=0;$i<36;$i++)
{
	$is->rotate(10);
	$m->nextframe();
}
//�����������ҳ��
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>