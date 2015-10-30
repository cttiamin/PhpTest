<?php
	$dom=new DomDocument("1.0");
	$root=$dom->createElement("sunyang");
	$deity=$dom->createElement("deity");
	$lv=$dom->createElement("lv");
	$abc=$dom->createElement("abc");
	$deityText=$dom->createTextNode("sunyang");
	$abcText=$dom->createTextNode("Hello");
	$root=$dom->appendChild($root);
	$deity=$root->appendChild($deity);
	$lv=$root->appendChild($lv);
	$abc=$lv->appendChild($abc);
	$deity->appendChild($deityText);
	$abc->appendChild($abcText);
	$dom->save("domCreate.xml");
?>
