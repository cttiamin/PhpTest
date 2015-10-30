<%
Session("myName")=""
Session.Contents.Remove("myName")  '消除Session中的nyname 项
' session.Content.removeall()   '消除所有session项目
%>