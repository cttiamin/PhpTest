<html>
<head>
<title>�û�ע��</title>
<script language="javaScript">
function valudateForm(){
	    var form = document.getElementById("registerFrom");
	    if(form.user_name.value == ""){
		    alert("�û�������Ϊ��");
			return false;
		}
		if(form.user_password.value == ""){
		    alert("�û����벻��Ϊ��");
			return false;
		}
		if(form.user_password.value !=form.validate_password.value){
		    alert("�����������벻һ��,����������");
			return false;
		}
		if(form.user_realName.value == ""){
		    alert("��������ʵ����");
			return false;
		}
		
		if(form.user_anotherName.value == ""){
		    alert("�������س�");
			return false;
		}
		
		if(form.user_contact.value == ""){
		    alert("��������ϵ��ʽ");
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
<h1>�û�ע��</h1>
	<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>ע����Ϣ(*Ϊ������)</th>
<td> </td>
</tr>
</thead>		
		<tr>
		   <th>�û���*</th>
		   <td> <input type="text" name="user_name" id="user_name">*</td>						
		</tr>	 
		<tr>
		   <th>����*</th>
		   <td><input type="password" name="user_password" id="user_password">*</td>							
		</tr>
		<tr>
			<th>��֤����*</th>
			<td><input type="password" name="validate_password" id="validate_password">*</td>							
		</tr>
		<tr>
		   <th>�Ա�</th>
		   <td> 
		   <input type="radio" name="user_sex" id="user_sex" value="��" checked >��
		   <input type="radio" name="user_sex" id="user_sex" value="Ů" >Ů</td>					
		</tr>						
		<th>email</th>
		   <td><input type="text" name="user_email" id="user_email"></td>						   
		 </tr>
		 <tr>
			<th>��ϵ�绰</th>
			<td><input type="text" name="user_phone" id="user_phone"></td>							
		 </tr>
		 <tr>
			<th>��ַ</th>
			<td><input type="text" name="user_address" id="user_address"></td>						
		 </tr>						
		 
	</table>
	<table summary="Submit Button" cellpadding="0" cellspacing="0">

<tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">�ύ</button>
<button class="reset" type="button" onClick="javascript:history.back()">����</button>
</td>
</table>
	</div>
	</form>
</body>
</html>