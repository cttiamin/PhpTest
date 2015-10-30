<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
	randomize                  '随机数初始化
	yzm=int(8999*rnd()+1000)   '用随机函数生成yzm
	'response.write yzm
	'response.end
	a=int(yzm/1000)        'a为千位数的数字
	b=int((yzm-a*1000)/100)  'b是百位数的数字
	c=int((yzm-a*1000-b*100)/10)    'c是十位数的数字
	d=int(yzm-a*1000-b*100-c*10)      'd是个位数的数字
	%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<script language="javascript">
function ckfrm() {
	   if(document.form1.adminuser.value.length<2){
	   alert("用户名不能为空");
	   document.form1.adminuser.focus();
	   return  false;
	   }
	  if(document.form1.pwd.value.length<2){
	  alert("密码不能为空");
		document.form1.pwd.focus();
		return false;
		}
		if(document.form1.yzm.value!=<%=yzm%>){
		alert("验证码不正确");
		document.form1.yzm.focus();
		return false;
		}
		
	}

	
</script>
<form id="form1" name="form1" method="post" action="a_chklogin.asp" onsubmit="return ckfrm();"> 
  <table width="380" border="1" align="center" bgcolor="#99FFCC">
    <tr>
      <td colspan="2" align="center">管理员登陆页面</td>
    </tr>
    <tr>
      <td align="right">用户名：</td>
      <td><input name="adminuser" type="text" id="adminuser" /></td>
    </tr>
    <tr>
      <td align="right">密码：</td>
      <td><input name="pwd" type="password" id="pwd" /></td>
    </tr>
    <tr>
      <td align="right">验证码：</td>
      <td><input name="yzm" type="text" id="yzm" size="4" /><img src="images/yzm/3/<%=a%>.gif" /><img src="images/yzm/3/<%=b%>.gif" /><img src="images/yzm/3/<%=c%>.gif" /><img src="images/yzm/3/<%=d%>.gif" /></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </table>
</form>

</body>
</html>
