<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<%
dim title,flag,content,sqlstr
 id=request.Form("id")
 title=request.Form("title")
 flag=request.Form("flag")
 content=request.Form("content")
  sqlstr="update article set title='"&title&"',content='"&content&"',flag="&flag&" where id="&id
  conn.execute sqlstr
  response.write("<script language=javascript>")
  response.write("alert('文章修改成功');")
  response.write("location='select.asp';")
  response.write("</script>")
   
%>
