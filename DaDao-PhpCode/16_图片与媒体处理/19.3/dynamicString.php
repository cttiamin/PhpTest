<?php
//����sans�������
$f=new SWFFont('_sans');
//�����ı����ű���$sunyang
$sunyang=new SWFTextField();
//�����ı�����
$sunyang->setFont($f);
//�����ı���ɫ
$sunyang->setColor(255,0,0 );
//�����ı���С
$sunyang->setHeight(20);
//�����ı�����
$sunyang->addString('sunyang');

//��������
$m=new SWFMovie();
//���ö�����С
$m->setDimension(300,300);
//���붯������
$ss=$m->add($sunyang);
//���÷���λ��
$ss->moveTo(0,0);

//���Ʒ���ʵ��
for($i=0;$i<10;$i++) {
	$ss->move(1,0);
	$m->nextframe();
}
//���Ʒ���ʵ��
for($i=0;$i<10;$i++) {
	$ss->move(-1,0);
	$m->nextframe();
}
//����ʵ����˸Ч��
for ($i=0;$i<5;$i++){
	$m->remove($ss);
	$m->nextframe();
	$m->nextframe();

	$ss=$m->add($sunyang);
	$ss->moveTo(0,0);
	$m->nextframe();
	$m->nextframe();
}
//����ʵ������Ч��
for($i=0;$i<20;$i++) {
	$ss->scaleTo(1.0+($i/10.0),1.0+($i/10.0));
	$m->nextframe();
}
//�����������ҳ��
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>
