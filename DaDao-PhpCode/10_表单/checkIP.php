<html>
<head>
<title>test</title>
<script language="JavaScript">
//У��IP��ַ
function checkIP()
{
var s=document.checkform.ip.value;
var patrn=/^(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|)$/;
if (!patrn.exec(s)) {
	alert ("IP��ַ��ʽ����ȷ");
return false;	
}
return true;
}
</script>
</head>
<body>
<form name="checkform" action="" method="POST">
IP��ַ��<input type="text" name="ip" value=""><br>
<input type="submit" name="subbtn" value="�ύ"  onclick="return checkIP()" />
</form>
</body>
</html>
