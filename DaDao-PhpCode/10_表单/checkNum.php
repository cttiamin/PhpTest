<html>
<head>
<title>test</title>
<script language="JavaScript">
function isNumberString (InString,RefString) //�����жϺ���
{
if(InString.length==0) return false;
for (Count=0; Count < InString.length; Count++)  {
	TempChar= InString.substring (Count, Count+1);
	if (RefString.indexOf (TempChar, 0)==-1)  
	return false;
}
return true;
}
//��֤����ʾ���������Ϣ
function check(){
	if (isNumberString(document.checkform.price.value,"1234567890.")!=1)
	{
	alert("�۸�ֻ��Ϊ����!");
	return false;
	}	
}
</script>
</head>
<body>
<form name="checkform" action="" method="POST">
�۸�<input type="text" name="price" value="">
<input type="submit" name="subbtn" value="�ύ"  onclick="return check()" />
</form>
</body>
</html>
