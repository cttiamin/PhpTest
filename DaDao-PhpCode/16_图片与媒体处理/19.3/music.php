<?php
//新建动画
$m = new SWFMovie();
//设置动画背景
$m->setBackground(0,255,255);
//设置动画大小
$m->setDimension(300,300);

//设置动画桢数
$m->setRate(12.0);
//引入MP3文件
$m->streamMp3(fopen("致艾丽丝.mp3", "rb"));
//155秒乘以12桢/秒等于1860桢
$m->setFrames(1860);
//定义动画符号
$s = new SWFShape();
$s->setLine(5,255,0,0);
$s->movePenTo(-100,-100);
$s->drawLineTo(100,100);

//将符号引入动画中
$ts = $m->add($s);
$ts->moveTo(150,150);

//符号动作
//旋转400
for($i=0;$i<200;$i++) {
	$ts->rotate(10);
	$m->nextframe();
}
for($i=0;$i<200;$i++) {
	$ts->rotate(-10);
	$m->nextframe();
}
//大小变换600
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
//左右移动400
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
//上下移动400
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
//旋转60
for($i=0;$i<60;$i++) {
	$ts->rotate(10);
	$m->nextframe();
}
//输出动画
header('Content-type: application/x-shockwave-flash');
$m->output();
?>
