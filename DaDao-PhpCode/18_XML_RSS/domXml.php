<?php
$dom=new DOMDocument("1.0");	//��������
$dom->load("simple.xml");	//�����ļ�
echo $dom->documentElement->tagName."<br>"; //���ڵ�	��������ʼ��ǩ�������
echo "<hr>";	
getNodes();
function getNodes(){
	global $dom;	//�õ�$dom����
	foreach($dom->documentElement->childNodes as $node){//ѭ������
		$nodeName=$node->nodeName;
		if($nodeName!="#text"){
			echo $nodeName."<br>"; //�ڵ���
			if($node->hasChildNodes()){ //�Ƿ����ӽڵ�
				getChildren($node);	//����getChildren����
			}
			echo "/".$nodeName."<br>";
			echo "<hr>";
		}
	}
}
function getChildren($node){
	foreach($node->childNodes as $children){
		if($children->nodeName!="#text"){//������������ı�����ǩ�����
			echo $children->nodeName."<br>";
			getChildren($children);
			echo "/".$children->nodeName."<br>";
		}else{	//��������ݣ����������
			if(strlen(trim($children->nodeVale))>0){
				echo "[".trim($children->nodeValue)."]<br>";
			}	
		}
	}	
}
echo "/".$dom->documentElement->tagName; //���ڵ�
?>