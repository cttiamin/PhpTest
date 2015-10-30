<?php
$dom=new DOMDocument("1.0");	//创建对象
$dom->load("simple.xml");	//载入文件
echo $dom->documentElement->tagName."<br>"; //根节点	，解析开始标签将其输出
echo "<hr>";	
getNodes();
function getNodes(){
	global $dom;	//得到$dom对象
	foreach($dom->documentElement->childNodes as $node){//循环遍历
		$nodeName=$node->nodeName;
		if($nodeName!="#text"){
			echo $nodeName."<br>"; //节点名
			if($node->hasChildNodes()){ //是否在子节点
				getChildren($node);	//调用getChildren函数
			}
			echo "/".$nodeName."<br>";
			echo "<hr>";
		}
	}
}
function getChildren($node){
	foreach($node->childNodes as $children){
		if($children->nodeName!="#text"){//如果不是内容文本，标签名输出
			echo $children->nodeName."<br>";
			getChildren($children);
			echo "/".$children->nodeName."<br>";
		}else{	//如果是内容，将内容输出
			if(strlen(trim($children->nodeVale))>0){
				echo "[".trim($children->nodeValue)."]<br>";
			}	
		}
	}	
}
echo "/".$dom->documentElement->tagName; //根节点
?>