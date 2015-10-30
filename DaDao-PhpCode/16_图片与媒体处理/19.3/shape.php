<?php
$shape1=new SWFShape();
$colorShape1=$shape1->addFill(255,0,0);
$shape1->setRightFill($colorShape1);
$shape1->movePenTo(-100,-100);
$shape1->drawLineto(-100,100);
$shape1->drawLineto(100,100);
$shape1->drawLineto(100,-100);
$shape1->drawLineto(-100,-100);
?>