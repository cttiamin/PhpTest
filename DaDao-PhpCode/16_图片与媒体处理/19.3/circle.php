<?php
//�������
$s=new SWFShape();

//���÷�����ɫ
$s->setRightFill(255,0,0);

//����Բ�η���
$s->movePenTo(0,0);
$s->drawCircle(200);

//���嶯��
$m=new SWFMovie();
//���ö�����С
$m->setDimension(500,500);

//��Բ�η������붯����
$i=$m->add($s);
//���÷����ڶ����е�λ��
$i->moveTo(250, 250);

//�ı������ɫ
$m->nextFrame();
$i->multColor(0,0,0);
$i->addColor(255,255,0);

$m->nextFrame();
$i->multColor(0,0,0);
$i->addColor(0,255,0);

$m->nextFrame();
$i->multColor(0,0,0);
$i->addColor(0,255,255);

$m->nextFrame();
$i->multColor(0,0,0);
$i->addColor(0,0,255);

$m->nextFrame();
$i->multColor(0,0,0);
$i->addColor(255,0,255);

$m->nextFrame();
$i->multColor(0,0,0);
$i->addColor(255,0,0);
$m->nextFrame();

//�����������ҳ��
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>
