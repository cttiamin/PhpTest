<%
CFile=Server.MapPath("counter.txt")   '统计文件所在的路径，放在文件里面去
Set FObj=Server.CreateObject("Scripting.FileSystemObject")  ' 创建文件对象，
%>
<%=CFile%>
<br>
<%
Set Out=FObj.OpenTextFile(CFile)   '
Counter=Out.ReadLine 
Set Out=FObj.CreateTextFile(CFile) 
Application.lock 
Counter=Counter +1 
Out.Write(Counter) 
Application.unlock 
Out.Close 
 %> 
 <p>欢 迎 ！ 您 是 访 问 本 站 点 的 第<%= Counter%> 位 客 人 ！ 