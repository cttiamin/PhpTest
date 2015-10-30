<?php
//将xajax的函数库文件包含在脚本中
require_once('./include/xajax_core/xajax.inc.php');
//定义xajax类的实例变量
$xajax = new xajax();
//设置xajax的javascript路径
$xajax->configure('javascript URI', './include/');
//设置xajax编码集
$xajax->setCharEncoding("gb2312");
//判断用户登录的函数
function checkUser($userForm){
	//定义xajax响应
	$objResponse = new xajaxResponse();
	//定义标志变量
	$ifNull=false;
	//判断用户名是否为空
	if (trim($userForm['username']) == "") {
		$objResponse->alert("请输入用户名");
		$ifNull=true;
	}
	//判断用户密码是否为空
	if (trim($userForm['password']) == "") {
		$objResponse->alert("请输入密码");
		$ifNull=true;
	}
	//当用户名或密码有为空的情况
	if ($ifNull) {
		//显示登录按钮文本，并将其设置为可用，同时给出登录失败提示
		$objResponse->assign("submit","value","登录");
		$objResponse->assign("submit","disabled",false);
		$objResponse->assign("resultDiv","innerHTML","登录失败");
	}else {
		//如果用户名为sunyang密码也为sunyang则给出登录成功提示
		if ((trim($userForm['username'])=="sunyang")&&(trim($userForm['password'])=="sunyang")) {
			//将按钮文本改为你好
			$objResponse->assign("submit","value","你好");
			//给出登录成功提示
			$objResponse->assign("resultDiv","innerHTML","登录成功");
			//将两个文本框清空
			$objResponse->clear("username","value");
			$objResponse->clear("password","value");
		}
		//否则给出登录失败提示
		else {
			//将按钮状态改为可用，并设置其文本为登录
			$objResponse->assign("submit","value","登录");
			$objResponse->assign("submit","disabled",false);
			//给出登录失败提示
			$objResponse->assign("resultDiv","innerHTML","用户名或密码错误，请重新登录");
			//将密码文本框清空
			$objResponse->clear("password","value");
		}
	}
	//返回Xajax响应
	return $objResponse;
}
//将checkUser函数注册
$xajax->registerFunction("checkUser");
//发送xajax请求同时得到响应
$xajax->processRequest();
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<html>
<head>
	<title>login</title>
	<?php
	//初始化xajax
	$xajax->printJavascript();
	?>
	<script type="text/javascript">
	//调用Xajax的JavaScript函数
	function loginSubmit() {
		//将按钮设为不可用，并设置其文本为“请稍候”
		xajax.$('submit').disabled=true;
		xajax.$('submit').value="请稍候";
		//调用xajax函数checkUser，并将表单内容作为参数传入
		xajax_checkUser(xajax.getFormValues("loginForm"));
		return false;
	}
	</script>
</head>
<body onload="loginForm.username.focus()">
	<form id="loginForm" action="javascript:void(null);" onsubmit="loginSubmit();">
		<div>用户名:</div><div><input id="username" type="text" name="username" /></div>
		<div>密码:</div><div><input type="password" name="password" /></div>
		<div class="submitDiv">
			<input id="submit" type="submit" value="登录"/>
		</div>
	</form>
	<div id="resultDiv"></div>
</body>
</html>