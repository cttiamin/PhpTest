
<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
'set conn=nothing
conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
'response.Write "和数据库已经连结成成"
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="476" border="1" align="center">
<script language=javascript>
function checkall()
{
   var a = document.getElementsByTagName("input");//getElementsByTagName传回指定名称的元素集合,是一种方法
   //alert(document.getElementsByName("checkALL").checked);
   if(form1.checkALL.checked)
   {
       for (var i=0; i<a.length; i++)
       if (a[i].type == "checkbox") a[i].checked = true;
   }
   else
   {
      for (var i=0; i<a.length; i++)
       if (a[i].type == "checkbox") a[i].checked = false;
   }
}
</script>

<form id="form1" name="form1" method="post" action="del_set.asp">
  <tr>
    <td width="76"><strong>编号</strong></td>
    <td width="269"><strong>姓名</strong></td>
    <td width="109">全选
	<input type="checkbox" name="checkALL"  id="checkALL"value="Check All" onClick="checkall()"></td>
  </tr>
  
  <%
dim sqlstr,rs
set rs=Server.CreateObject("adodb.recordset")
sqlstr="select * from students"
 'set rs=nothing
rs.open sqlstr,conn,3,3
while not rs.eof
%>
  <tr>
    <td><%=rs("ID")%></td>
    <td><%=rs("sname")%></td>
    <td><input type="checkbox" name="ID" value="<%=rs("ID")%>" /></td>
  </tr>
  <%
 rs.movenext
 wend
 rs.close

 %>
 <tr>
 	<td height="41" colspan="3" align="center"><input type="submit" name="Submit" value="删除选中的学生" /></td>
 	</tr>	
 </form>
</table>


<br />


</body>
</html>
