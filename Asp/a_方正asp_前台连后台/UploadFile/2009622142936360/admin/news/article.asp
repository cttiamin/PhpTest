<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../../include/adminconn.asp" -->
<%
dim rs,sqlstr,s_id,page
set rs=server.CreateObject("adodb.recordset")
s_id=request.QueryString("s_id")
if s_id="" then 
	response.Redirect("bigclass.asp")
end if
page=request.QueryString("page")
if page="" then
  page=1
end if
page=cint(page)
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<a href="SmallClass.asp?s_id=<%=s_id%>">
<%
sqlstr="select s_title from SmallClass where S_id="&s_id
rs.open sqlstr,conn,1,1
response.write(rs("s_title"))
rs.close
%>
</a>����µ����¹���<a href="Article_add.asp?S_id=<%=s_id%>">(�������)</a> <br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <script language=javascript>
	function checkall()
	{
	   var a = document.getElementsByTagName("input");//getElementsByTagName����ָ�����Ƶ�Ԫ�ؼ���,��һ�ַ���
	   //alert(document.getElementsByName("checkALL").checked);
	   if(frmname.check1.checked)
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

<form id="frmname" name="frmname" method="post" action="article_del.asp?s_id=<%=s_id%>">
  <tr>
    <td width="5%" align="center" bgcolor="#6699FF">
	<input type="checkbox" name="check1" value="checkbox" onclick="return checkall();" /></td>
    <td width="54%" align="center" bgcolor="#6699FF">����</td>
    <td width="8%" align="center" bgcolor="#6699FF">��ʾ</td>
    <td width="10%" align="center" bgcolor="#6699FF">�Ƽ�</td>
    <td width="8%" align="center" bgcolor="#6699FF">�������</td>
    <td width="15%" align="center" bgcolor="#6699FF">����</td>
  </tr>
  <%
  sqlstr="select * from article where s_id="&s_id
  rs.open sqlstr,conn,1,1
  if rs.eof then 
  %>
  
  <tr>
    <td colspan="6"><div align="center">û������</div></td>
  </tr>
  <%
  else
        	rs.pagesize=10                  '����ÿҳ��¼��
		   pagecounts=rs.pagecount       '��¼��ҳ����
		   recordcounts=rs.recordcount       'ȡ�õ�ǰ��¼��
		   rs.AbsolutePage=page              '��query�ֶ��ж�ȡ��ǰҳ

		for i= 1 to rs.pagesize
		   if rs.eof then
		     exit for
		   end if
	
	  %>
	  <tr>
		<td><input name="ID" type="checkbox" id="ID" value="<%=rs("ID")%>" /></td>
		<td><%=rs("a_title")%></td>
		<td><%
		if rs("a_state")=0 then
		response.write("����ʾ")
		else
		response.write("��ʾ")
		end if
		%></td>
		<td>
		<%
		if rs("flag")=0 then
		response.write("���Ƽ�")
		elseif rs("flag")=1 then
		response.write("�Ƽ�")
		elseif rs("flag")=2 then
		response.write("�ص��Ƽ�")
		end if
		%></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <%
	  rs.movenext
	  next
  end if
  rs.close
  %>
  	  <tr>
		<td align="center"><input name="del" type="submit" id="del"  onclick="return confirm('��ȷ��Ҫɾ����ѡ��������?');" value="ɾ��"/></td>
	    <td colspan="5" align="center"><a href="?page=1&amp;s_id=<%=s_id%>">
	      <input name="del" type="submit" id="del" value="��Ϊ�Ƽ�" />
	      <input name="del" type="submit" id="del" value="ɾ������" />
        ��ҳ</a>
	      <%
	if page>1 then
	%>
          <a href="?page=<%=page-1%>&amp;s_id=<%=s_id%>">��һҳ</a>
          <%
	end if
	%>
          <%
	if page<pagecounts then
	%>
          <a href="?page=<%=page+1%>&amp;s_id=<%=s_id%>">��һҳ </a>
          <%
   end if
   %>
          <a href="?page=<%=pagecounts%>&amp;s_id=<%=s_id%>"> ���һҳ </a>
          <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
            <%
			  for i= 1 to pagecounts
			   if i=page then
			  %>
            <option value="?page=<%=i%>&amp;s_id=<%=s_id%>"  selected="selected"><%=i%></option>
            <%
			 else
			 %>
            <option value="?page=<%=i%>&amp;s_id=<%=s_id%>" ><%=i%></option>
            <%
			 end if
			 next
			 %>
          </select></td>
      </tr>
  </form>
</table>

</body>
</html>
