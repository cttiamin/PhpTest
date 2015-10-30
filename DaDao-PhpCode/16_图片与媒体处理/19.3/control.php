<?php
//定义符号
$c = new SWFShape();
//设置符号颜色
$colorC = $c->addFill(0, 0, 255);
$c->setRightFill($colorC);
//绘制符号
$c->movePenTo(-250,-250);
$c->drawCircle(100);

//定义动画剪辑
$spriteC = new SWFSprite();
//将符号加入动画剪辑中
$i = $spriteC->add($c);
//设置符号图层
$i->setDepth(1);
//设置动画剪辑总桢数
$spriteC->setframes(25);
//添加动画剪辑控制
$spriteC->add(new SWFAction("stop();"));
//跳到下一桢
$spriteC->nextFrame();
//添加动画剪辑控制
$spriteC->add(new SWFAction("play();"));
//符号旋转
for($n=0; $n<100; $n++) {
	$i->rotate(36);
	$spriteC->nextFrame();
}

//定义按钮函数，返回按钮符号
function button($r, $g, $b) {
	//定义按钮符号
	$bc = new SWFShape();
	//设置按钮颜色
	$bc->setRightFill($bc->addFill($r, $g, $b));
	//绘制按钮形状
	$bc->drawLine(500,0);
	$bc->drawLine(0,200);
	$bc->drawLine(-500,0);
	$bc->drawLine(0,-200);
	//将按钮符号返回
	return $bc;
}
//定义按钮变量
$b = new SWFButton();
//在按钮变量中加入按钮符号，同时设置其操作
//当按钮未被按下时按钮为红色
$b->addShape(button(255,0,0),SWFBUTTON_UP|SWFBUTTON_HIT);
//当鼠标悬停于按钮上时按钮为绿色
$b->addShape(button(0,255,0),SWFBUTTON_OVER);
//鼠标按下按钮时按钮为蓝色
$b->addShape(button(0,0,255),SWFBUTTON_DOWN);
//鼠标按下按钮时触发的动作
$b->addAction(new SWFAction("setTarget('/circle');play();"), SWFBUTTON_MOUSEDOWN);

//定义动画变量
$m = new SWFMovie();
//设置动画大小
$m->setDimension(4000,3000);

//添加动画剪辑
$i = $m->add($spriteC);
$i->setDepth(3);
$i->moveTo(1650,600);
//设置动画剪辑名称
$i->setName("circle");

//添加按钮
$i = $m->add($b);
$i->setDepth(2);
$i->moveTo(1400,1500);

//将动画输出到页面
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>
