<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>

</head>

<body>
<script language="javascript">
<!--
function Checkform(){
	  if(document.form1.SName.value==""){
		alert("请输入姓名！");
		document.form1.SName.focus(); //定位光标焦点
		return false;
	  }else{
		return true;
			}
	}

//-->

</script>
<%
dim ID,sqlstr
ID=request.querystring("ID")
sqlstr="select * from students where ID="&ID
set rs=server.CreateObject("ADODB.Recordset")
rs.open sqlstr,conn,3,3
while not rs.eof and not rs.bof
%>
<form id="form1" name="form1" method="post" action="updt_save.asp" onsubmit="return Checkform();">
  <table width="534" height="301" border="1" align="center">
    <tr>
      <td width="86" height="27" align="center">学生姓名：</td>
      <td width="432"><input name="SName" type="text" value="<%=rs("SName")%>" /><input name="ID" type="hidden" value="<%=request.QueryString("ID")%>" /></td>
    </tr>
    <tr>
      <td align="center">学生性别：</td>
      <td><p>
      
		<%
		if rs("Sex")=1 then
				%>
				  <label>
          <input name="Sex" type="radio" value="M" checked="checked" />
          男</label>
       
        <label>
          <input type="radio" name="Sex" value="F" />
          女</label>
		  <%
		  else
		  %>
    	  <label>
          <input name="Sex" type="radio" value="M" />
          男</label>
       
        <label>
          <input type="radio" name="Sex" value="F" checked="checked" />
          女</label>
		<%
		end if
		%>
        <br />
      </p></td>
    </tr>
    <tr>
      <td align="center">学生年龄：</td>
      <td><select name="Age">
	  <%
	  dim i
	  for i=20 to 49
			 if rs("Age")=i then
	  %>
			<option value="<%=i%>" selected="selected"><%=i%></option>
			<%
			else
			%>
		     <option value="<%=i%>" ><%=i%></option>
        
		<%
			end if
		next
		%>
      </select>
      </td>
    </tr>
    <tr>
      <td height="83" align="center">学习课程：</td>
      <td>
	  <%
	  if instr(rs("Course"),"网络基础")<>0 then
	  %>
	  <input name="Course1" type="checkbox" value="网络基础" checked="checked" />
	  网络基础
	  <%else%>
	  <input name="Course1" type="checkbox" value="网络基础" />
	  网络基础
	  <%
	  end if
	  if instr(rs("Course"),"windows 2000操作系统")<>0 then
	  %>
	  <input name="Course2" type="checkbox" value="windows 2000操作系统" checked="checked" />
	  windows 2000操作系统
	  <%else%>
	  	  <input type="checkbox" name="Course2" value="windows 2000操作系统" />windows 2000操作系统
	  <%
	  end if
	  if instr(rs("Course"),"网络设备")<>0 then
	  %>
	  <input name="Course3" type="checkbox" value="网络设备" checked="checked" />
	  网络设备<br />
	  <%else%>
	  <input name="Course3" type="checkbox" value="网络设备" />
	  网络设备<br />
	  <%
	  end if
	  if instr(rs("Course"),"网络管理")<>0 then
	  %>
      <input name="Course4" type="checkbox" value="网络管理" checked="checked" />
      网络管理
	  <%else%>
      <input type="checkbox" name="Course4" value="网络管理" />网络管理
	  <%
	  end if
	  if instr(rs("Course"),"网络设计")<>0 then
	  %>
	  <input name="Course5" type="checkbox" value="网络设计" checked="checked" />
	  网络设计
	  <%else%>
	  <input type="checkbox" name="Course5" value="网络设计" />网络设计
	  <%
	  end if
	  if instr(rs("Course"),"网络安全")<>0 then
	  %>
	  <input name="Course6" type="checkbox" value="网络安全" checked="checked" />
	  网络安全
	  <%else%>
	  <input type="checkbox" name="Course6" value="网络安全" />网络安全
	  <%end if
	  if instr(rs("Course"),"网络数据库")<>0 then
	  %>
	  <input name="Course7" type="checkbox" value="网络数据库" checked="checked" />
	  网络数据库<br />
	  <%else%>
	  <input type="checkbox" name="Course7" value="网络数据库" />网络数据库<br />
	  <%end if
	  if instr(rs("Course"),"网络开发")<>0 then
	  %>
      <input name="Course8" type="checkbox" value="网络开发" checked="checked" />
      网络开发
	  <%else%>
      <input type="checkbox" name="Course8" value="网络开发" />网络开发
	  <%
	  end if
	  if instr(rs("Course"),"linux操作系统")<>0 then
	  %>
	  <input name="Course9" type="checkbox" value="linux操作系统" checked="checked" />
	  linux操作系统
	  <%else%>
	  <input type="checkbox" name="Course9" value="linux操作系统" />linux操作系统
	  <%
	  end if
	  if instr(rs("Course"),"综合布线")<>0 then
	  %>
	  <input name="Course0" type="checkbox" value="综合布线" checked="checked" />
	  综合布线
	  <%else%>
	  <input type="checkbox" name="Course0" value="综合布线" />综合布线
	  <%
	  end if
	  %>
	  </td>
    </tr>
    <tr>
      <td height="86" align="center">个人简历：</td>
      <td><textarea name="intro" cols="45" rows="5"><%=rs("Intro")%></textarea></td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center"><input type="submit" name="Submit" value="修改学生信息" /></td>
    </tr>
	<%
	rs.movenext
	wend
	rs.close
	conn.close
	set rs=nothing
	set conn=nothing
	%>
  </table>
</form>
</body>
</html>
