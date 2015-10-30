<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>helloWorld ajax</title>
<script language="javascript" type="text/javascript">
//创建XMLHttpRequest的函数
	function createXMLHttp(){
	var request; 
	var browser=navigator.appName; //得到浏览器
	//如果是IE浏览器
	if(browser=="Microsoft Internet Explorer"){
		request=new ActiveXObject("Microsoft.XMLHTTP");
		return.request;
	}//非IE浏览器 
	else{
	request=new XMLHttpRequest();
	return request;
	}
}
	
	//定义XMLHttpRequest
	var xhr=createXMLHttp();
	function HelloSunyang(){
	//跳转路径
	var url="hello.php?name="+document.forms[0].name.value;  //文本框中的值
	//跳转
	xhr.open("GET",url,ture);	//发送请求方式为get,true：是否为异步请求
	//设置回调用回函数为getHello
	xhr.onreadystatechange=getHello;
	//将请求发送
	xhr.send();
}
	function getHello(){
		//判断XmlHttpRequest状态
		if(xhr.readyState==4){
//取值  描述
//0 描述一种“未初始化”状态，此时，已经创建一个XMLHttpRequest对象，但是还没有初始化
//1 描述一种“发送”状态，此时，代码已经调用了XMLHttpRequest open()方法并且XMLHttpRequest已经准备把一个请求发送到
//2 描述一种“发送”状态，此时，已经通过send()方法把一个请求发送服务器端但是还没有收到一个响应
//3 描述一种“正在接收”状态，此时，已经接收到Http响应头部信息，但是消息部分还没有完全接收结果
//4 描述一种"已加载"状态：此时，响应已经被完全接收
		//设置变量htlloStr的值为响应返回值
		var helloStr=xhr.responseText;
		//将响应返回值显示在名为hello的div标签中
		document.getElement("hello").innerHTML=helloStr;
		}
	}
</script>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>hello ajax</td>
  </tr>
  <tr>
    <td>
	<form method="get">
	your name:
	<input type="text" name="name" value=""/>
	</form>
	</td>
  </tr>
  <tr>
    <td>
	<!--定度按扭,并设置点击按钮调用HelloSunyang函数-->
	<input name="" value="hello" type="button" onclick="HelloSunyang()"/>
	</td>
  </tr>
  <tr>
    <td>
	<!--接收返回内容的div标签-->
	<div id="hello"></div>
	</td>
  </tr>
</table>

	
</body>
</html>
