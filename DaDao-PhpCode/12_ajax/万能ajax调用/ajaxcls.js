var xmlHttp;
function creatXMLHttpRequest() {
	if(window.ActiveXObject) {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	} else if(window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	}
}
function startRequest(id,url) {
	creatXMLHttpRequest();
	xmlHttp.onreadystatechange = function(){handleStateChange(id);}
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function handleStateChange(id) {
	if(xmlHttp.readyState == 1) {
		document.getElementById(id).innerHTML = "<div class='ac'>正在加载请稍等...</div>";
	}
	if(xmlHttp.readyState == 4 ){
		if(xmlHttp.status == 200) {
			var allcon =  xmlHttp.responseText;
			document.getElementById(id).innerHTML = allcon;
			//alert(allcon);
		}
	}
}
