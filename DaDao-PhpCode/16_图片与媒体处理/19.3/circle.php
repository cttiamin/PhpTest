<?php
//定义符号
$s=new SWFShape();

//设置符号颜色
$s->setRightFill(255,0,0);

//设置圆形符号
$s->movePenTo(0,0);
$s->drawCircle(200);

//定义动画
$m=new SWFMovie();
//设置动画大小
$m->setDimension(500,500);

//将圆形符号引入动画中
$i=$m->add($s);
//设置符号在动画中的位置
$i->moveTo(250, 250);

//改变符号颜色
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

//将动画输出到页面
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>
