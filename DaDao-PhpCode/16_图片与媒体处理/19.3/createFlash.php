<?php
$shape1=new SWFShape();
$shape1->addFill(255,0,0);
$shape1->setRightFill($colorShape1);
$shape1->movePenTo(-100,-100);
$shape1->drawLineto(-100,100);
$shape1->drawLineto(100,100);
$shape1->drawLineto(100,-100);
$shape1->drawLineto(-100,-100);
$m=new SWFMovie();
$m->setDimension(800,600);
$m->setBackground(255,0,0);
$s1=$m->add($shape1);
?>