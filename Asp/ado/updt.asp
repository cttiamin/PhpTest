<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>

</head>

<body>
<script language="javascript">
<!--
function Checkform(){
	  if(document.form1.SName.value==""){
		alert("������������");
		document.form1.SName.focus(); //��λ��꽹��
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
      <td width="86" height="27" align="center">ѧ��������</td>
      <td width="432"><input name="SName" type="text" value="<%=rs("SName")%>" /><input name="ID" type="hidden" value="<%=request.QueryString("ID")%>" /></td>
    </tr>
    <tr>
      <td align="center">ѧ���Ա�</td>
      <td><p>
      
		<%
		if rs("Sex")=1 then
				%>
				  <label>
          <input name="Sex" type="radio" value="M" checked="checked" />
          ��</label>
       
        <label>
          <input type="radio" name="Sex" value="F" />
          Ů</label>
		  <%
		  else
		  %>
    	  <label>
          <input name="Sex" type="radio" value="M" />
          ��</label>
       
        <label>
          <input type="radio" name="Sex" value="F" checked="checked" />
          Ů</label>
		<%
		end if
		%>
        <br />
      </p></td>
    </tr>
    <tr>
      <td align="center">ѧ�����䣺</td>
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
      <td height="83" align="center">ѧϰ�γ̣�</td>
      <td>
	  <%
	  if instr(rs("Course"),"�������")<>0 then
	  %>
	  <input name="Course1" type="checkbox" value="�������" checked="checked" />
	  �������
	  <%else%>
	  <input name="Course1" type="checkbox" value="�������" />
	  �������
	  <%
	  end if
	  if instr(rs("Course"),"windows 2000����ϵͳ")<>0 then
	  %>
	  <input name="Course2" type="checkbox" value="windows 2000����ϵͳ" checked="checked" />
	  windows 2000����ϵͳ
	  <%else%>
	  	  <input type="checkbox" name="Course2" value="windows 2000����ϵͳ" />windows 2000����ϵͳ
	  <%
	  end if
	  if instr(rs("Course"),"�����豸")<>0 then
	  %>
	  <input name="Course3" type="checkbox" value="�����豸" checked="checked" />
	  �����豸<br />
	  <%else%>
	  <input name="Course3" type="checkbox" value="�����豸" />
	  �����豸<br />
	  <%
	  end if
	  if instr(rs("Course"),"�������")<>0 then
	  %>
      <input name="Course4" type="checkbox" value="�������" checked="checked" />
      �������
	  <%else%>
      <input type="checkbox" name="Course4" value="�������" />�������
	  <%
	  end if
	  if instr(rs("Course"),"�������")<>0 then
	  %>
	  <input name="Course5" type="checkbox" value="�������" checked="checked" />
	  �������
	  <%else%>
	  <input type="checkbox" name="Course5" value="�������" />�������
	  <%
	  end if
	  if instr(rs("Course"),"���簲ȫ")<>0 then
	  %>
	  <input name="Course6" type="checkbox" value="���簲ȫ" checked="checked" />
	  ���簲ȫ
	  <%else%>
	  <input type="checkbox" name="Course6" value="���簲ȫ" />���簲ȫ
	  <%end if
	  if instr(rs("Course"),"�������ݿ�")<>0 then
	  %>
	  <input name="Course7" type="checkbox" value="�������ݿ�" checked="checked" />
	  �������ݿ�<br />
	  <%else%>
	  <input type="checkbox" name="Course7" value="�������ݿ�" />�������ݿ�<br />
	  <%end if
	  if instr(rs("Course"),"���翪��")<>0 then
	  %>
      <input name="Course8" type="checkbox" value="���翪��" checked="checked" />
      ���翪��
	  <%else%>
      <input type="checkbox" name="Course8" value="���翪��" />���翪��
	  <%
	  end if
	  if instr(rs("Course"),"linux����ϵͳ")<>0 then
	  %>
	  <input name="Course9" type="checkbox" value="linux����ϵͳ" checked="checked" />
	  linux����ϵͳ
	  <%else%>
	  <input type="checkbox" name="Course9" value="linux����ϵͳ" />linux����ϵͳ
	  <%
	  end if
	  if instr(rs("Course"),"�ۺϲ���")<>0 then
	  %>
	  <input name="Course0" type="checkbox" value="�ۺϲ���" checked="checked" />
	  �ۺϲ���
	  <%else%>
	  <input type="checkbox" name="Course0" value="�ۺϲ���" />�ۺϲ���
	  <%
	  end if
	  %>
	  </td>
    </tr>
    <tr>
      <td height="86" align="center">���˼�����</td>
      <td><textarea name="intro" cols="45" rows="5"><%=rs("Intro")%></textarea></td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center"><input type="submit" name="Submit" value="�޸�ѧ����Ϣ" /></td>
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
