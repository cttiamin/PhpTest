<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->


<%
dim username,pwd,fname,ssex,age,mail,quest,answer,jibie,sqlstr,rs
     set rs=server.CreateObject("adodb.recordset")
    username=request.Form("username")
	pwd=request.Form("pwd")
	fname=request.Form("fname")
	ssex=request.Form("ssex")
	age=request.Form("y_age")&"-"&request.Form("m_age")
	mail=request.Form("mail")
	quest=request.Form("quest")
	answer=request.Form("answer")
	jibie=request.Form("jibie")
  if username<>"" then

     sqlstr="select * from [huiyuan] where username='"&username&"'"
	 	 rs.open sqlstr,conn,0,1
	 if rs.eof then
	sqlstr="insert into [huiyuan]([username],[userpwd],[fname],[ssex],[age],[mail],[quest],[answer],[jibie])values('"&username&"','"&pwd&"','"&fname&"','"&ssex&"','"&age&"','"&mail&"','"&quest&"','"&answer&"',"&jibie&")"
		 'response.write sqlstr
		 'response.end
		 conn.execute sqlstr
		  response.write("<script language=javascript>")
		  response.write("alert('��ϲ��ע��ɹ���,���ȷ����¼��վ');")
		  response.write("location='login.asp';")
		  response.write("</script>")

    else	 
      		  response.write("<script language=javascript>")
		  response.write("alert('���û��Ѿ�����');")
		  response.write("location='login.asp';")
		  response.write("</script>")

	 end if
 end if
%>
	  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
}
.STYLE4 {
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE5 {color: #000000}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="302" border="1" align="center" bgcolor="#0000FF">
    <tr>
      <td colspan="2" align="center" bgcolor="#000066"><span class="STYLE1">��վ��Աע��ҳ��</span></td>
    </tr>
    <tr>
      <td width="73" align="center" bgcolor="#999999"><span class="STYLE4">�û�����</span></td>
      <td width="213" align="center" bgcolor="#999999"><input name="username" type="text" id="username" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999" class="STYLE4">���룺</td>
      <td align="center" bgcolor="#999999"><input name="pwd" type="text" id="pwd" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999"><span class="STYLE5">ȷ�����룺</span></td>
      <td align="center" bgcolor="#999999"><input name="pwd2" type="text" id="pwd2" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">����������</td>
      <td align="center" bgcolor="#999999"><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">�ƺ���</td>
      <td align="center" bgcolor="#999999"><input type="radio" name="ssex" value="��" />
        ����
          <input type="radio" name="ssex" value="Ů" />
      Ůʿ</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">�������ڣ�</td>
      <td align="center" bgcolor="#999999">
	  <select name="y_age" id="y_age">
	    <%
		    i=2008
			do while i>=1970
		%>
        <option value="<%=i%>"><%=i%></option>
                <%
				i=i-1
				loop
				%>
		</select>
        ��
        <select name="m_age" id="m_age">
		   <%
		   for i=1 to 12
		   %>
          <option value="<%=i%>"><%=i%></option>
            <%
			next
			%>          
		</select>
        ��</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">���䣺</td>
      <td align="center" bgcolor="#999999"><input name="mail" type="text" id="mail" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">��ȫ���⣺</td>
      <td align="center" bgcolor="#999999"><input name="quest" type="text" id="quest" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">�𰸣�</td>
      <td align="center" bgcolor="#999999"><input name="answer" type="text" id="answer" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999">ע������</td>
      <td align="center" bgcolor="#999999"><select name="jibie" id="jibie">
        <option value="1">��ͨ��Ա</option>
        <option value="2">VIP��Ա</option>
        <option value="3">��ʯ��Ա</option>
      </select>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#999999"><input type="submit" name="Submit" value="ȷ��ע��" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>
</body>
</html>
