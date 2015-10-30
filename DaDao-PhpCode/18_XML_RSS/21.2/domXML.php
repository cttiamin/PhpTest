<?php
$dom=new DomDocument("1.0");
$dom->load("simple.xml");
echo $dom->documentElement->tagName."<br>";//���ڵ�
echo "<hr>";
getNodes();
function getNodes(){
	global $dom;
	foreach ($dom->documentElement->childNodes as $node) {
		$nodeName=$node->nodeName;
		if($nodeName!="#text"){
	  	echo $nodeName."<br>";//�ڵ���
		  	if($node->hasChildNodes()){		//�Ƿ�����ӽڵ�
	  			getChildren($node);
	  		}
  		echo "/".$nodeName."<br>";
  		echo "<hr>";
		}
	}
}
function getChildren($node){
	foreach ($node->childNodes as $children) {
  		if($children->nodeName!="#text"){
			echo $children->nodeName."<br>";
			getChildren($children);
  			echo "/".$children->nodeName."<br>";
  		}else{
  			if(strlen(trim($children->nodeValue))>0){
  				echo "[".trim($children->nodeValue)."]<br>";//�ڵ�����
  			}
		}
	}
}
echo "/".$dom->documentElement->tagName;//���ڵ�
?>