<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<script language="javascript">
<!--
function Checkform(){
	  if(document.form1.SName.value==""){
		alert("������������");
		document.form1.SName.focus();
		return false;
	  }else{
		return true;
	  }
}

//-->

</script>
<form id="form1" name="form1" method="post" action="a_addnew.asp" onsubmit="return Checkform();">
  <table width="534" height="301" border="1" align="center">
    <tr>
      <td width="86" height="27" align="center">ѧ��������</td>
      		<td width="432">
	  <input type="text" name="SName" />
	    	</td>
    </tr>
    <tr>
      <td align="center">ѧ���Ա�</td>
      <td><p>
        <label>
          <input name="Sex" type="radio" value="M" checked="checked" />
          ��</label>
       
        <label>
          <input type="radio" name="Sex" value="F" />
          Ů</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td align="center">ѧ�����䣺</td>
      <td><select name="age">
	  <%
	  dim i
	  for i=20 to 49 step 1
	  %>
        <option value="<%=i%>"><%=i%></option>
		<%
		next
		%>
      </select>      </td>
    </tr>
    <tr>
      <td height="83" align="center">ѧϰ�γ̣�</td>
      <td>
	  <input type="checkbox" name="Course1" value="�������" />
        �������
        <input type="checkbox" name="Course2" value="windows 2000����ϵͳ" />windows 2000����ϵͳ<input type="checkbox" name="Course3" value="�����豸" />
        �����豸<br />
      <input type="checkbox" name="Course4" value="�������" />�������<input type="checkbox" name="Course5" value="�������" />�������<input type="checkbox" name="Course6" value="���簲ȫ" />���簲ȫ<input type="checkbox" name="Course7" value="�������ݿ�" />
      �������ݿ�<br />
      <input type="checkbox" name="Course8" value="���翪��" />���翪��<input type="checkbox" name="Course9" value="linux����ϵͳ" />linux����ϵͳ<input type="checkbox" name="Course0" value="�ۺϲ���" />�ۺϲ���</td></tr>
    <tr>
      <td height="86" align="center">���˼�����</td>
      <td><textarea name="intro" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center"><input type="submit" name="Submit" value="����ѧ����Ϣ" /></td>
    </tr>
  </table>
</form>
</body>
</html>
