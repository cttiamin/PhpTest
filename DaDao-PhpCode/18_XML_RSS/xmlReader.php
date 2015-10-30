<?php
$xml=new XMLReader();
$xml->open('simple.xml');
while($xml->read()){
	switch($xml->nodeType){//1:标签开始，3：标签体内容，14：空标签体，15：标签结束
		case 1:
			echo $xml->name."<br>";
			break;
		case 15:
			echo "/".$xml->name."<br>";
			break;
		case 3:
			echo "[".trim($xml->value)."[<br>";
			break;
		case 14:
			break;
	}
}
?>