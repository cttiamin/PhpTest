<html>
<head>
<title>用户注册</title>
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
<form name="registerFrom" action="userController.php?flag=register" method="POST" >
<div class="mainbox formbox">		
<h1>用户注册</h1>
	<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>注册信息(*为必填项)</th>
<td> </td>
</tr>
</thead>		
		<tr>
		   <th>用户名*</th>
		   <td> <input type="text" name="user_name" id="user_name">*</td>						
		</tr>	 
		<tr>
		   <th>密码*</th>
		   <td><input type="password" name="user_password" id="user_password">*</td>							
		</tr>
		<tr>
			<th>验证密码*</th>
			<td><input type="password" name="validate_password" id="validate_password">*</td>							
		</tr>
		<tr>
		   <th>性别</th>
		   <td> 
		   <input type="radio" name="user_sex" id="user_sex" value="男" checked >男
		   <input type="radio" name="user_sex" id="user_sex" value="女" >女</td>					
		</tr>						
		<th>email</th>
		   <td><input type="text" name="user_email" id="user_email"></td>						   
		 </tr>
		 <tr>
			<th>联系电话</th>
			<td><input type="text" name="user_phone" id="user_phone"></td>							
		 </tr>
		 <tr>
			<th>地址</th>
			<td><input type="text" name="user_address" id="user_address"></td>						
		 </tr>						
		 
	</table>
	<table summary="Submit Button" cellpadding="0" cellspacing="0">

<tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">提交</button>
<button class="reset" type="button" onClick="javascript:history.back()">返回</button>
</td>
</table>
	</div>
	</form>
</body>
</html>