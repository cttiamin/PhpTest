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
<title>无标题文档</title>
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
	   var a = document.getElementsByTagName("input");//getElementsByTagName传回指定名称的元素集合,是一种方法
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

文章管理<a href="article_add1.asp?s_id=<%=s_id%>">(添加文章)</a><br />
<table width="100%" height="37" border="1" cellpadding="5" cellspacing="0">
<form id="form2" name="frmname" method="post" action="Article_del1.asp?s_id=<%=s_id%>">
  <tr>
    <td width="6%" bgcolor="#66CCFF"><input type="checkbox" name="check1" value="checkbox" onclick="return checkall();" /></td>
    <td width="67%" align="center" bgcolor="#66CCFF"><span class="STYLE1">文章标题</span></td>
    <td width="9%" align="center" bgcolor="#66CCFF"><span class="STYLE1">显示</span></td>
    <td width="9%" align="center" bgcolor="#66CCFF"><span class="STYLE1">推荐</span></td>
    <td width="9%" align="center" bgcolor="#66CCFF"><span class="STYLE1">图片</span></td>
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
    <td colspan="5" align="center">没有记录</td>
  </tr>
  <%
  else
  		   rs.pagesize=10                  '设置每页记录数
		   pagecounts=rs.pagecount       '记录总页码数
		   recordcounts=rs.recordcount       '取得当前记录数

		   rs.AbsolutePage=page              '从query字段中读取当前页
			 for i=1 to rs.pagesize             '循环从1 到  每页记录数
			   if rs.eof then
					exit for          '如果记录集为空退出循环
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
    <td align="center"><input name="del" type="submit" id="删除" value="删除" onclick='return confirm("您真的确定要删除所选项目吗?");' style="cursor: hand;" /></td>
    <td colspan="4" align="center"><%
if cint(page)<=1 then
%>
首页 上一页
  <%
else
%>
  <a href='?page=1&s_id=<%=s_id%>'>首页</a> <a href="?page=<%=(page-1)%>&s_id=<%=s_id%>">上一页</a>
  <%
end if
if cint(page)>=pagecounts then
%>
下一页 最后
<%
else
%>
<a href='?page=<%=(page+1)%>&s_id=<%=s_id%>'>下一页</a> <a href='?page=<%=pagecounts%>&s_id=<%=s_id%>'>最后</a>
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
