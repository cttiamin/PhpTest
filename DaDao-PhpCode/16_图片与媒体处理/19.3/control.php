<?php
//�������
$c = new SWFShape();
//���÷�����ɫ
$colorC = $c->addFill(0, 0, 255);
$c->setRightFill($colorC);
//���Ʒ���
$c->movePenTo(-250,-250);
$c->drawCircle(100);

//���嶯������
$spriteC = new SWFSprite();
//�����ż��붯��������
$i = $spriteC->add($c);
//���÷���ͼ��
$i->setDepth(1);
//���ö�������������
$spriteC->setframes(25);
//��Ӷ�����������
$spriteC->add(new SWFAction("stop();"));
//������һ��
$spriteC->nextFrame();
//��Ӷ�����������
$spriteC->add(new SWFAction("play();"));
//������ת
for($n=0; $n<100; $n++) {
	$i->rotate(36);
	$spriteC->nextFrame();
}

//���尴ť���������ذ�ť����
function button($r, $g, $b) {
	//���尴ť����
	$bc = new SWFShape();
	//���ð�ť��ɫ
	$bc->setRightFill($bc->addFill($r, $g, $b));
	//���ư�ť��״
	$bc->drawLine(500,0);
	$bc->drawLine(0,200);
	$bc->drawLine(-500,0);
	$bc->drawLine(0,-200);
	//����ť���ŷ���
	return $bc;
}
//���尴ť����
$b = new SWFButton();
//�ڰ�ť�����м��밴ť���ţ�ͬʱ���������
//����ťδ������ʱ��ťΪ��ɫ
$b->addShape(button(255,0,0),SWFBUTTON_UP|SWFBUTTON_HIT);
//�������ͣ�ڰ�ť��ʱ��ťΪ��ɫ
$b->addShape(button(0,255,0),SWFBUTTON_OVER);
//��갴�°�ťʱ��ťΪ��ɫ
$b->addShape(button(0,0,255),SWFBUTTON_DOWN);
//��갴�°�ťʱ�����Ķ���
$b->addAction(new SWFAction("setTarget('/circle');play();"), SWFBUTTON_MOUSEDOWN);

//���嶯������
$m = new SWFMovie();
//���ö�����С
$m->setDimension(4000,3000);

//��Ӷ�������
$i = $m->add($spriteC);
$i->setDepth(3);
$i->moveTo(1650,600);
//���ö�����������
$i->setName("circle");

//��Ӱ�ť
$i = $m->add($b);
$i->setDepth(2);
$i->moveTo(1400,1500);

//�����������ҳ��
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>
