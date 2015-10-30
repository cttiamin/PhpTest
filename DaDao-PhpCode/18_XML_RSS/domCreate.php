<?php
$dom=new DOMDocument("1.0");	//定义dom变量
$root=$dom->createElement("sunyang");	//createElment:创建xml文档中标签
$deity=$dom->createElement("deity");	//
$lv=$dom->createElement("lv");
$abc=$dom->createElement("abc");
$deityText=$dom->createTextNode("sunyang");	//createTextNode:指定标标签体的内容
$abcText=$dom->createTextNode("Hello");
$root=$dom->appendChild($root);		//appendChild:在标签体内加入子标签
$deity=$root->appendChild($deity);
$lv=$root->appendChild($lv);
$abc=$lv->appendChild($abc);
$deity->appendChild($deityText);
$abc->appendChild($abcText);
$dom->save("domCreate.xml");

?>
