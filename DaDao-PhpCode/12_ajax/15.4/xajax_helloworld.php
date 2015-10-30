<?php
//将xajax的函数库文件包含在脚本中
require_once('./include/xajax_core/xajax.inc.php');
//定义xajax类的实例变量
$xajax = new xajax();

//设置xajax的javascript路径
$xajax->configure('javascript URI', './include/');//configure()：指定正常运行xajax的js库路径,javascript URI:为指定函数库的名称,/include/为路径，

//定义xajax函数
function helloWorld($user)
{
	$text = "Hello ".$user;
	//定义xajax响应
	$objResponse = new xajaxResponse();
	//设置响应返回位置
	$objResponse->assign('hello', 'innerHTML', $text);
	//将响应返回
	return $objResponse;
}
//将helloWorld函数进行注册
$xajax->registerFunction("helloWorld");
//发送xajax请求同时得到响应
$xajax->processRequest();
echo '<?xml version="1.0" encoding="UTF-8"?>';	 //输出所需要的版本信息
?>
<html>
<head>
	<title>xajax hello world</title>
<?php
//初始化xajax
$xajax->printJavascript();	//将当前的由ajax生成的javascript函数,放入printJavasecipt()函数转换javascript函数
?>
<script type="text/javascript">
//用于调用xajax函数的JavaScript
function sayhello()
{
	//得到表单中username文本框的值
	var u=document.forms[0].username.value;
	//调用xajax函数helloWorld，注意，这里加入了“xajax_”前缀
	xajax_helloWorld(u);
	return false;
}
</script>
</head>
<body>
<div id="hello"></div>
<br/>
<form>
<input type="text" name="username"/>
<button onclick="sayhello()">Hello</button>
</form>
</body>
</html>