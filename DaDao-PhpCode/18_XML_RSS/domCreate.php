<?php
$dom=new DOMDocument("1.0");	//����dom����
$root=$dom->createElement("sunyang");	//createElment:����xml�ĵ��б�ǩ
$deity=$dom->createElement("deity");	//
$lv=$dom->createElement("lv");
$abc=$dom->createElement("abc");
$deityText=$dom->createTextNode("sunyang");	//createTextNode:ָ�����ǩ�������
$abcText=$dom->createTextNode("Hello");
$root=$dom->appendChild($root);		//appendChild:�ڱ�ǩ���ڼ����ӱ�ǩ
$deity=$root->appendChild($deity);
$lv=$root->appendChild($lv);
$abc=$lv->appendChild($abc);
$deity->appendChild($deityText);
$abc->appendChild($abcText);
$dom->save("domCreate.xml");

?>
