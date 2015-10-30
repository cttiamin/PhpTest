<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>

<style>
body,table,tr
{
	background-color: #3399FF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size:12px;
	font-family:宋体;
	color:#FFFFFF;
}
</style>
<script language="javascript">
function xz1(objname)
{
	obj = document.getElementById(objname);
	obj.style.borderWidth = '0';
}

function xz2(objname)
{
	obj = document.getElementById(objname);
	obj.style.borderWidth = '1';
	obj.style.borderStyle = 'outset';
	obj.style.borderColor = '#DFDFDF';
}
</script></head>

<body>
<table width="964" height="66" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="12%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td width="63%">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;&nbsp;网站后台管理</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right" valign="bottom"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="224" height="23"></td>
        <td width="104" align="center" valign="middle" id="xx1" onMouseOver="xz2('xx1')" onMouseOut="xz1('xx1')" onClick="parent.main.location='Admin_CreateHtmlIndex.asp'" style="cursor:hand;">页面生成</td>
        <td width="100" align="center" valign="middle" id="xx3" onMouseOver="xz2('xx3')" onMouseOut="xz1('xx3')" onClick="parent.location='../index.asp'" style="cursor:hand;">回到首页 </td>
       <td width="100" align="center" valign="top" id="xx2" onMouseOver="xz2('xx2')" onMouseOut="xz1('xx2')" onClick="parent.main.location='adminuser_myedit.asp'" style="cursor:hand;""> <a href="adminuser_myedit.asp" target="mainFrame">修改口令</a> </td>
        <td width="100" align="center" valign="top" id="xx4" onMouseOver="xz2('xx4')" onMouseOut="xz1('xx4')" onClick="top.logout();" style="cursor:hand;"> 退出系统</td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
