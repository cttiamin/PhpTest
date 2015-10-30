//Xmlhttp = new XmlHTTPRequest();//将XHR这个对象实例化，但是因为浏览器之争，IE占了主导地位又不支持，所以需要再做一个选择性的语句，来判断什么浏览器的情况下去实例化我们不同的对象，因此此句还得注释！

var xmlHttp;	//先声明是一个局部变量
function S_XMLHttpRequest() {//设定方法
	if(window.ActiveXObject) {//首先判断浏览器是否支持控件方式，有就说明是IE核心的浏览器
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');//来实现最核心的SHR的功能
	} else if(window.XMLHttpRequest) {			//否则就使用最基本的最常见SHR来实例化SHR对象
		xmlHttp = new XMLHttpRequest();
	}
}

function funphp100(url){
		S_XMLHttpRequest();		//把上面的方法引用进来
		xmlHttp.open("GET","for.php?id="+url,true);	//先打开链接，
		xmlHttp.onreadystatechange= byphp;//准备就绪，要执行，因为这个是很复杂的，因此我们可以定义一个方法，这个方法就叫做byphp吧！
		xmlHttp.send(null);//发送，可以使用null是不发送内容
	}


function byphp(){
	var byphp100 = xmlHttp.responseText;
	document.getElementById('php100').innerHTML = byphp100;
	//"getElementById"是引用了一个DOM的组件的，通过这个方法将我们的内容发送到浏览器当中的一个指定的位置,以HTML的形式，也可以text的形式发送，付给byphp100这个变量
}
