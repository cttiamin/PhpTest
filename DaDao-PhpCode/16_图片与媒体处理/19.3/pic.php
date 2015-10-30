<?php
//引入图像
$sunyang=new SWFBitmap(file_get_contents("sunyang42.gif"));
//定义符号
$s=new SWFShape();
//将图像设置为符号中的基本颜色属性
$imgs=$s->addFill($sunyang);
//将图像引入符号
$s->setRightFill($imgs);
//按照图像大小设置符号范围
$s->movePenTo( 0, 0 );
$s->drawLineTo( $sunyang->getWidth(), 0 );
$s->drawLineTo( $sunyang->getWidth(), $sunyang->getHeight() );
$s->drawLineTo( 0, $sunyang->getHeight() );
$s->drawLineTo( 0, 0 );

//定义动画
$m=new SWFMovie();
//定义动画大小
$m->setDimension($sunyang->getWidth()*4, $sunyang->getHeight()*4);
//将符号引入动画
$is=$m->add($s);
//设置符号位置
$is->moveTo($sunyang->getWidth()*2, $sunyang->getHeight()*2);
//设置符号旋转
for($i=0;$i<36;$i++)
{
	$is->rotate(10);
	$m->nextframe();
}
//将动画输出到页面
header('Content-Type: application/x-shockwave-flash');
$m->output();
?>