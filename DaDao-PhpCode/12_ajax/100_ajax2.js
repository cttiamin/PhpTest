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
	xmlHttp.open("GET","100_for2.php?id="+f,true);	 //打开	 
	xmlHttp.onreadystatechange=byphp;	 //准备
	xmlHttp.send(null);		//发送
}

function byphp(){
	if(xmlHttp.readyState==1){			//判断本地
		document.getElementById("php100").innerHTML = "loading........";
		}
	if(xmlHttp.readyState==4){	
		//if(xmlHttp.Status==200){		//判断服务器执行
	var byphp100 = xmlHttp.responseText;
	document.getElementById("php100").innerHTML = byphp100;
		//}
	}
}

