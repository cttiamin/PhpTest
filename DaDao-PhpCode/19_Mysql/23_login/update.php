<html>
<head>
<title>修改用户信息</title>
<script language="javascript">
function valudateForm(){
	var form = document.getElementById("registerFrom");
	if(form.user_name.value == ""){
		alert("用户名不能为空");
		return false;
	}
	if(form.user_password.value == ""){
		alert("用户密码不能为空");
		return false;
	}
	if(form.user_password.value !=form.validate_password.value){
		alert("两次密码不一致");
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
}
addLoadEvent(setfunclick);
</script>

</head>

<body>

<form name="registerFrom" method="post" action="userController.php?flag=update">
<table width="347" border="1">
  <tr>
    <td width="124">用户名</td>
    <td width="207">
    <input type="hidden" name="id" value="<?php echo $userList['user_id'];?>">
    <?php echo $userList['user_name'];?></td>
  </tr>
  <tr>
    <td>密码</td>
    <td><input type="password" name="user_password" id="user_password" value="<?php echo $userList['user_psw'];?>"></td>
  </tr>
  <tr>
    <td>验证密码：</td>
    <td><input type="password" name="validate_password" id="validate_password"></td>
  </tr>
  <tr>
    <td>性别</td>
    <td><input type="radio" name="user_sex" value="男" checked >
      男
        <input type="radio" name="user_sex" value="女">
        女</td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="text" name="user_email" id="user_email"></td>
  </tr>
  <tr>
    <td>联系电话</td>
    <td><input type="text" name="user_phone" id="user_phone"></td>
  </tr>
  <tr>
    <td>地址</td>
    <td><input type="text" name="user_address" id="user_address"></td>
  </tr>
</table>

<table summary="Submit Button" cellpadding="0" cellspacing="0">
  <tr>

    <td>
	<input type="submit" name="Submit" value="提交">
	<input type="button" onclick="javascript:history.back()" value="返回">
	</td>
  </tr>

</table>
</form>
</body>
</html>
