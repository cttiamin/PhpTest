<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim title,flag,content,sqlstr
 title=request.Form("title")
 flag=request.Form("flag")
 content=request.Form("content")
 if title<>"" then
  sqlstr="insert into article(title,content,flag)values('"&title&"','"&content&"',"&flag&")"
  conn.execute sqlstr
  response.write("<script language=javascript>")
  response.write("alert('������ӳɹ�');")
  response.write("location='select.asp';")
  response.write("</script>")
 end if
   
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" height="136" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td width="130" bgcolor="#3399CC">��������⣺</td>
      <td width="354"><input name="title" type="text" id="title" size="50" /></td>
    </tr>
    <tr>
      <td height="41" bgcolor="#3399CC">�����Ƽ���</td>
      <td><input name="flag" type="radio" value="1" checked="checked" />
        ��ͨ 
          <input type="radio" name="flag" value="2" />
�Ƽ� 
<input type="radio" name="flag" value="3" />
�ص��Ƽ�</td>
    </tr>
    <tr>
      <td bgcolor="#3399CC">�������ݣ�</td>
      <td><textarea name="content" cols="50" rows="20" id="content"></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#3399CC">&nbsp;</td>
      <td><input type="submit" name="Submit" value="�ύ" /></td>
    </tr>
  </table>
</form>
</body>
</html>
