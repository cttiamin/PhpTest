<html>
<body>
_________________________________________________<br>
<%
  =server.HTMLEncode("<br>这里是显示在浏览器上的") '允许输出html代码
%>
<br>
_________________________________________________-_______________<br>
<%
  response.write("weqwerewr<br>这里会另起一行")    '这里就不允许
 %>
</body>
</html>