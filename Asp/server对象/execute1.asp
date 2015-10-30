<% response.write"开始进入execute1.asp文件<br>"
   response.write"这是文件1的输出结果<br>"
   response.write"现在准备接着输出文件2的结果<br>"
   server.execute("execute2.asp")    '执行excute2.asp 的文件后在执行下面的文件
   'server.Transfer("execute2.asp")		'执行 execute2.asp 的文件后下面的就不执行了
   response.Redirect("execute2.asp")   ' 跳转到 execute2.asp  文件去执行,前面的财不输出了 
   response.write"现在回到文件1里来了"
   response.write"现在文件1 执行结束"

%>