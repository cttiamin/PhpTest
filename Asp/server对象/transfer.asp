<% response.write"开始进入transfer.asp文件<br>"
   response.write"这是文件1的输出结果<br>"
   response.write"现在准备接着输出文件2的结果<br>"
  server.transfer("file2.asp")   '转去执行file2.asp 页面 不返回
   response.Write "再回到文件1"
%>