<?php
$xml=new XMLReader();
$xml->open('simple.xml');
while($xml->read()){
	switch($xml->nodeType){
		case 1:
			echo $xml->name."<br>";
			break;
		case 15:
			echo "/".$xml->name."<br>";
			break;
		case 3:
			echo "[".trim($xml->value)."]<br>";
			break;
		case 14:
			break;			
	}
}
?>