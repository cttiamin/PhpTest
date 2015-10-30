<html>
<head>
<title>修改用户信息</title>
<script language="javaScript">
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
		    alert("两次密码输入不一致,请重新输入");
			return false;
		}
		if(form.user_realName.value == ""){
		    alert("请输入真实姓名");
			return false;
		}
		
		if(form.user_anotherName.value == ""){
		    alert("请输入呢称");
			return false;
		}
		
		if(form.user_contact.value == ""){
		    alert("请输入联系方式");
			return false;
		}
		
	}	
	function addLoadEvent(func){
		var oldonload = window.onload;
		if(typeof window.onload!= 'function'){
			window.onload = func;	
		}else{
			window.onload = function(){
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
			return valudateForm();
		}
	}
	
	addLoadEvent(setfunclick);
</script>
 <LINK href="css/reg.css" type=text/css rel=stylesheet>
</head>
<body>
<form name="registerFrom" action="userController.php?flag=update" method="POST" >

<div class="mainbox formbox">		
<h1>修改用户信息</h1>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>用户信息( * 为必填项)</th>
<td> </td>
</tr>
</thead>
<input type="hidden" name="id" value="<?php echo $userList['user_id']?>">	
		<tr>
		   <td>用户名</td>
		   <td> <?php echo $userList['user_name']?></td>						
		</tr>	 
		<tr>
		   <td>新密码*</td>
		   <td><input type="password" name="user_password" id="user_password" value="<?php echo $userList['user_psw']?>"></td>							
		</tr>
		<tr>
			<td>验证密码*</td>
			<td><input type="password" name="validate_password" id="validate_password" value="<?php echo $userList['user_psw']?>"></td>							
		</tr>
		<tr>
		   <td>性别</td>
		   <td>
		   <input type="radio" name="user_sex" id="user_sex" value="男" <?php if($userList['user_sex']=='男') echo "checked";?> >男
		   <input type="radio" name="user_sex" id="user_sex" value="女" <?php if($userList['user_sex']=='女') echo "checked";?>  >女
		  </td>					
		</tr>						
		<td>email</td>
		   <td><input type="text" name="user_email" id="user_email" value="<?php echo $userList['user_email']?>"></td>						   
		 </tr>
		 <tr>
			<td>联系电话</td>
			<td><input type="text" name="user_phone" id="user_phone" value="<?php echo $userList['user_phone']?>"></td>							
		 </tr>
		 <tr>
			<td>地址</td>
			<td><input type="text" name="user_address" id="user_address" value="<?php echo $userList['user_address']?>"></td>						
		 </tr>
	</table>
<table summary="Submit Button" cellpadding="0" cellspacing="0">
<tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">修改</button>
<button class="reset" type="button" onClick="javascript:history.back()">返回</button>
</td>
</table>
	</form>
</body>
</html>