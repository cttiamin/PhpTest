<?php
//定义sans字体变量
$f=new SWFFont('_sans');
//定义文本符号变量$sunyang
$sunyang=new SWFTextField();
//设置文本字体
$sunyang->setFont($f);
//设置文本颜色
$sunyang->setColor(255,0,0 );
//设置文本大小
$sunyang->setHeight(20);
//设置文本内容
$sunyang->addString('sunyang');

//创建动画
$m=new SWFMovie();
//设置动画大小
$m->setDimension(300,300);
//引入动画符号
$ss=$m->add($sunyang);
//设置符号位置
$ss->moveTo(0,0);

//右移符号实例
for($i=0;$i<10;$i++) {
	$ss->move(1,0);
	$m->nextframe();
}
//左移符号实例
for($i=0;$i<10;$i++) {
	$ss->move(-1,0);
	$m->nextframe();
}
//符号实例闪烁效果
for ($i=0;$i<5;$i++){
	$m->remove($ss);
	$m->nextframe();
	$m->nextframe();

	$ss=$m->add($sunyang);
	$ss->moveTo(0,0);
	$m->nextframe();
	$m->nextframe();
}
//符号实例扩大效果
for($i=0;$i<20;$i++) {
	$ss->scaleTo(1.0+($i/10.0),1.0+($i/10.0));
	$m->nextframe();
}
//将动画输出到页面
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>
