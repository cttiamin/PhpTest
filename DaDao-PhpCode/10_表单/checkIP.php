<html>
<head>
<title>test</title>
<script language="JavaScript">
//校验IP地址
function checkIP()
{
var s=document.checkform.ip.value;
var patrn=/^(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|)$/;
if (!patrn.exec(s)) {
	alert ("IP地址格式不正确");
return false;	
}
return true;
}
</script>
</head>
<body>
<form name="checkform" action="" method="POST">
IP地址：<input type="text" name="ip" value=""><br>
<input type="submit" name="subbtn" value="提交"  onclick="return checkIP()" />
</form>
</body>
</html>
