<?php
$shape1=new SWFShape();
//省略对符号$shape1的相关操作

$m=new SWFMovie();
//省略对动画$m的相关操作

$s1=$m->add($shape1);

//设置符号$shape1的脚本
$s1->moveto(100,100);
?>