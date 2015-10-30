<html>
<head>
<title>用户登录</title>
<script language="javaScript">
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

<form name="loginFrom" action="userController.php?flag=login" method="POST" >
<div class="mainbox formbox">		
<h1>用户登录</h1>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>请登录</th>
<td> </td>
</tr>
</thead>
	
		<tr>
		   <th>用户名</th>
		   <td> <input type="text" name="user_name" id="user_name"></td>						
		</tr>	 
		<tr>
		   <th>密码</th>
		   <td><input type="password" name="user_password" id="user_password"></td>							
		</tr>
		 <tr>
		 <th> </th>
			<td colspan="2"><button class="submit" type="submit" name="submit">登录</button>
			<a href="register.php">新用户注册</a>
			</td>
		</tr>	
	</table>
	</div>
	</form>
</body>
</html>