<?php
//�½�����
$m = new SWFMovie();
//���ö�������
$m->setBackground(0,255,255);
//���ö�����С
$m->setDimension(300,300);

//���ö�������
$m->setRate(12.0);
//����MP3�ļ�
$m->streamMp3(fopen("�°���˿.mp3", "rb"));
//155�����12��/�����1860��
$m->setFrames(1860);
//���嶯������
$s = new SWFShape();
$s->setLine(5,255,0,0);
$s->movePenTo(-100,-100);
$s->drawLineTo(100,100);

//���������붯����
$ts = $m->add($s);
$ts->moveTo(150,150);

//���Ŷ���
//��ת400
for($i=0;$i<200;$i++) {
	$ts->rotate(10);
	$m->nextframe();
}
for($i=0;$i<200;$i++) {
	$ts->rotate(-10);
	$m->nextframe();
}
//��С�任600
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++){
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->scaleTo(1.0-($i/100.0),1.0-($i/100.0));
}
for($i=0;$i<20;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0+($i/500.0),1.0+($i/500.0));
}

for($i=0;$i<200;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->scaleTo(1.0-($i/1000.0),1.0-($i/1000.0));
}
//�����ƶ�400
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->move(-1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->move(-1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->move(-1,0);
}
for($i=0;$i<40;$i++ ) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->move(-1,0);
}
for($i=0;$i<40;$i++ ) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(1,0);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(-10);
	$ts->move(-1,0);
}
//�����ƶ�400
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(0,1);
}
for($i=0;$i<40;$i++) {
	$ts->rotate(-10);
	$m->nextframe();
	$ts->move(0,-1);
}
for( $i = 0; $i < 40; $i++ ) {
	$ts->rotate( -10 );
	$m->nextframe();
	$ts->move(0,-1);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(0,1);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(0,1);
}
for($i=0;$i<40;$i++) {
	$ts->rotate(-10);
	$m->nextframe();
	$ts->move(0,-1);
}
for($i=0;$i<40;$i++) {
	$ts->rotate(-10);
	$m->nextframe();
	$ts->move(0,-1);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(0,1);
}
for($i=0;$i<40;$i++) {
	$m->nextframe();
	$ts->rotate(10);
	$ts->move(0,1);
}
for($i=0;$i<40;$i++) {
	$ts->rotate(-10);
	$m->nextframe();
	$ts->move(0,-1);
}
//��ת60
for($i=0;$i<60;$i++) {
	$ts->rotate(10);
	$m->nextframe();
}
//�������
header('Content-type: application/x-shockwave-flash');
$m->output();
?>
