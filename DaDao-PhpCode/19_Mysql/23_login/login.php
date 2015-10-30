<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户登录</title>
<script language="javascript">
function valudateForm(){
	var form = document.getElementById("loginFrom");
	if(form.user_name.value == ""){
		alert("用户名不能为空");
		return false;
	}
	if(form.user_password.value == ""){
		alert("用户密码不能为空");
		return false;
	}
}
function addloadEvent(func){
	var oldonload = window.onload;
	if(typeof window.onload!= 'function' ){
		window.onload!=func;
	}else{
		window.onload=function(){
			oldonload();
			func();
		}
	}	
}
function setfunclick(){
	if(!document.getElementById){
		return false;
	}
	var button = document.getElementById("submit");
	button.onclick = function(){
		return valuedateForm();
	}

</script>
</head>

<body>
<form name="form1" method="post" action="userController.php?flag=login">
<table width="385" border="0">
  <tr>
    <td colspan="2">请登录：</td>
    </tr>
  <tr>
    <td width="111">用户名</td>
    <td width="264">
	<input type="text" name="user_name" id="user_name">
	</td>
  </tr>
  <tr>
    <td>密码</td>
    <td><input type="password" name="user_password" id="user_password"></td>
  </tr>
  <tr>
    <td><a href="register.php">新用户注册</a></td>
    <td><input type="submit" name="Submit" value="登录"></td>
  </tr>
</table>

</form>
</body>
</html>
