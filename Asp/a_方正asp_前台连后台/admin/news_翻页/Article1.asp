<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../../include/qxyz.asp" -->

<!--#include file="../../include/adminconn.asp" -->
<%
dim s_id,sqlstr,rs
set rs=server.CreateObject("adodb.recordset")
s_id=request.QueryString("s_id")
if s_id="" then
  response.Redirect("bigclass.asp")
end if

%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
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

���¹���<a href="article_add1.asp?s_id=<%=s_id%>">(�������)</a><br />
<table width="100%" height="37" border="1" cellpadding="5" cellspacing="0">
<form id="form2" name="frmname" method="post" action="Article_del1.asp?s_id=<%=s_id%>">
  <tr>
    <td width="6%" bgcolor="#66CCFF"><input type="checkbox" name="check1" value="checkbox" onclick="return checkall();" /></td>
    <td width="67%" align="center" bgcolor="#66CCFF"><span class="STYLE1">���±���</span></td>
    <td width="9%" align="center" bgcolor="#66CCFF"><span class="STYLE1">��ʾ</span></td>
    <td width="9%" align="center" bgcolor="#66CCFF"><span class="STYLE1">�Ƽ�</span></td>
    <td width="9%" align="center" bgcolor="#66CCFF"><span class="STYLE1">ͼƬ</span></td>
  </tr>
  <%
  dim page
  page=request.QueryString("page")
  if page="" then
    page=1
  end if
  sqlstr="select * from article where s_id="&s_id&" order by id desc"
  rs.open sqlstr,conn,1,1
  if rs.eof then
  %>
  <tr>
    <td colspan="5" align="center">û�м�¼</td>
  </tr>
  <%
  else
  		   rs.pagesize=10                  '����ÿҳ��¼��
		   pagecounts=rs.pagecount       '��¼��ҳ����
		   recordcounts=rs.recordcount       'ȡ�õ�ǰ��¼��

		   rs.AbsolutePage=page              '��query�ֶ��ж�ȡ��ǰҳ
			 for i=1 to rs.pagesize             'ѭ����1 ��  ÿҳ��¼��
			   if rs.eof then
					exit for          '�����¼��Ϊ���˳�ѭ��
	           end if
  %>
  <tr>
    <td><input type="checkbox" name="ID" value="<%=rs("ID")%>" /></td>
    <td><%=rs("a_title")%></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <%
	  rs.movenext
	  next
  end if
  rs.close
  set rs=nothing
  %>  
  <tr>
    <td align="center"><input name="del" type="submit" id="ɾ��" value="ɾ��" onclick='return confirm("�����ȷ��Ҫɾ����ѡ��Ŀ��?");' style="cursor: hand;" /></td>
    <td colspan="4" align="center"><%
if cint(page)<=1 then
%>
��ҳ ��һҳ
  <%
else
%>
  <a href='?page=1&s_id=<%=s_id%>'>��ҳ</a> <a href="?page=<%=(page-1)%>&s_id=<%=s_id%>">��һҳ</a>
  <%
end if
if cint(page)>=pagecounts then
%>
��һҳ ���
<%
else
%>
<a href='?page=<%=(page+1)%>&s_id=<%=s_id%>'>��һҳ</a> <a href='?page=<%=pagecounts%>&s_id=<%=s_id%>'>���</a>
<%
  end if
%> 

<select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
<%
for i=1 to pagecounts

%>
<%
if i=cint(page) then

%>

  <option value="?page=<%=i%>&s_id=<%=s_id%>"  selected="selected"><%=i%></option>
<%
else
%>
  <option value="?page=<%=i%>&s_id=<%=s_id%>" ><%=i%></option>
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
