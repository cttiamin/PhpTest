<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
randomize
yzm=int(8999*rnd()+1000)
a=int(yzm/1000)
b=int((yzm-a*1000)/100)
c=int((yzm-a*1000-b*100)/10)
d=int(yzm-a*1000-b*100-c*10)
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE2 {
	font-size: 24px;
	color: #00FF00;
}
.STYLE3 {font-size: 16px}
-->
</style>
</head>

<body>
<script language="javascript">
  function abc(){
  if(document.form1.adminuser.value.length<2){
	  alert("用户名不能为空");
	  document.form1.adminuser.focus();
	  return false;
	  }
  if(document.form1.userpwd.value.length<2){
	  alert("密码不能为空");
	  document.form1.userpwd.focus();
	  return false;
	  }
  if(document.form1.yzm.value!=<%=yzm%>){
	  alert("验证码不正确");
	  document.form1.yzm.focus();
	  return false;
	  }
  }
</script>

<form id="form1" name="form1" method="post" action="panduan.asp" onsubmit="return abc();">
  <table width="341" border="1" align="center" bgcolor="#000066">
    <tr>
      <td colspan="2" align="center" bgcolor="#006666"><span class="STYLE2">会员登陆系统</span></td>
    </tr>
    <tr>
      <td width="70" height="37" bgcolor="#00CCCC"><span class="STYLE3">用户名</span></td>
      <td width="255" bgcolor="#00CCCC"><input name="adminuser" type="text" id="adminuser" size="20" /></td>
    </tr>
    <tr>
      <td height="58" bgcolor="#00CCCC" class="STYLE3">密码</td>
      <td bgcolor="#00CCCC"><input name="userpwd" type="text" id="userpwd" size="20" /></td>
    </tr>
    <tr>
      <td height="55" bgcolor="#00CCCC" class="STYLE3">验证码</td>
      <td bgcolor="#00CCCC"><input name="yzm" type="text" id="yzm" size="4" />
      <img src="../imge/3/<%=a%>.gif" width="12" height="15" /><img src="../imge/3/<%=b%>.gif" width="12" height="15" /><img src="../imge/3/<%=c%>.gif" width="12" height="15" /><img src="../imge/3/<%=d%>.gif" width="12" height="15" /></td>
    </tr>
    <tr>
      <td height="42" colspan="2" bgcolor="#00CCCC"><input type="submit" name="Submit" value="提交" />
      &nbsp;&nbsp;&nbsp;
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
  
</form>
</body>
</html>
