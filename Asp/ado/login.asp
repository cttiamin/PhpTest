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
function checkform()
{
	if(document.form1.AName.value=="")
		{
			 alert("�������û�����");
			 document.form1.AName.focus();
			 return false;
		}
	else
	    {
		    if(document.form1.PWord.value=="")
			{
			alert("����������");
			document.form1.PWord.focus();
			return false
			}
		}
}
		


//-->
</script>
<form id="form1" name="form1" method="post" action="admin.asp" onsubmit="return checkform();">
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="47" colspan="2" align="center">����Ա��¼</td>
    </tr>
    <tr>
      <td width="193" height="39" align="center">�û���:</td>
      <td width="307"><input type="text" name="AName" /></td>
    </tr>
    <tr>
      <td height="30" align="center">����:</td>
      <td><input type="text" name="PWord" /></td>
    </tr>
    <tr>
      <td height="55" colspan="2" align="center"><input type="submit" name="Submit" value="����Ա��¼" /></td>
    </tr>
  </table>
</form>
</body>
</html>
