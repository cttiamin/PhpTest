<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../#asdsa%343/data.mdb")
 conn.open constr
%>
<%
dim adminuser,pwd
   adminuser=request.Form("adminuser")
   pwd=request.Form("pwd")
   
dim rs,sqlstr
  set rs=server.CreateObject("adodb.recordset")
  sqlstr="select * from [admin] where adminuser='"&adminuser&"'"
  rs.open sqlstr,conn,0,1
  if rs.eof then
	  response.write("<script language=javascript>")
	  response.write("alert('�û���������');")
	  response.write("location='login.asp';")
	  response.write("</script>")
  else
    if pwd=rs("pwd") then
       session("adminuser")=adminuser 
	   session("flag")=rs("flag")
		  response.write("<script language=javascript>")
		  response.write("alert('��¼�ɹ�');")
		  response.write("location='index.asp';")
		  response.write("</script>")
     else
		  response.write("<script language=javascript>")
		  response.write("alert('������û���������');")
		  response.write("location='login.asp';")
		  response.write("</script>")
	 end if
  end if
%>