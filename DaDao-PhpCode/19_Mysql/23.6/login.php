<html>
<head>
<title>�û���¼</title>
<script language="javaScript">
function valudateForm(){
	    var form = document.getElementById("loginFrom");
	    if(form.user_name.value == ""){
		    alert("�û�������Ϊ��");
			return false;
		}
		if(form.user_password.value == ""){
		    alert("�û����벻��Ϊ��");
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
<h1>�û���¼</h1>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>���¼</th>
<td> </td>
</tr>
</thead>
	
		<tr>
		   <th>�û���</th>
		   <td> <input type="text" name="user_name" id="user_name"></td>						
		</tr>	 
		<tr>
		   <th>����</th>
		   <td><input type="password" name="user_password" id="user_password"></td>							
		</tr>
		 <tr>
		 <th> </th>
			<td colspan="2"><button class="submit" type="submit" name="submit">��¼</button>
			<a href="register.php">���û�ע��</a>
			</td>
		</tr>	
	</table>
	</div>
	</form>
</body>
</html>