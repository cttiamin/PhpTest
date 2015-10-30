<?php
$shape1=new SWFShape();
//省略对符号$shape1的相关操作

$m=new SWFMovie();
//省略对动画$m的相关操作

$s1=$m->add($shape1);

//省略对脚本的设置

//将Flash输出到outputFile.swf文件
$m->save('outputFile.swf');
?>