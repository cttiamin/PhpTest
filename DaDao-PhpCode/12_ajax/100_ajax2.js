var xmlHttp;
function S_XMLHttpRequest(){
	if(window.ActiveXObject){
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP'); 
		}else if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
		}
}
function funphp100(name){
	var f=document.myform.user.value;
	//alert(f);
	S_XMLHttpRequest();	
	xmlHttp.open("GET","100_for2.php?id="+f,true);	 //��	 
	xmlHttp.onreadystatechange=byphp;	 //׼��
	xmlHttp.send(null);		//����
}

function byphp(){
	if(xmlHttp.readyState==1){			//�жϱ���
		document.getElementById("php100").innerHTML = "loading........";
		}
	if(xmlHttp.readyState==4){	
		//if(xmlHttp.Status==200){		//�жϷ�����ִ��
	var byphp100 = xmlHttp.responseText;
	document.getElementById("php100").innerHTML = byphp100;
		//}
	}
}

