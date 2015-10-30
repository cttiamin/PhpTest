<%
Session("name")=Request.form("name")
Session("genger")=request.form("gender")
%>
<!-- 统计一共有多少项session-->
这里Session对象的Contents集合一共有
<%=Session.Contents.Count%>项:
<br>
<%
FOR I=1 to Session.Contents.Count    'i = 1循环到count 的集合
Response.Write("<br>"&Session.Contents(I))		'输出获取的所有session
NEXT

Session.Abandon
%>