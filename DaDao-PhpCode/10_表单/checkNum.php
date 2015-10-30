<html>
<head>
<title>test</title>
<script language="JavaScript">
function isNumberString (InString,RefString) //数字判断函数
{
if(InString.length==0) return false;
for (Count=0; Count < InString.length; Count++)  {
	TempChar= InString.substring (Count, Count+1);
	if (RefString.indexOf (TempChar, 0)==-1)  
	return false;
}
return true;
}
//验证并提示输入错误信息
function check(){
	if (isNumberString(document.checkform.price.value,"1234567890.")!=1)
	{
	alert("价格只能为数字!");
	return false;
	}	
}
</script>
</head>
<body>
<form name="checkform" action="" method="POST">
价格：<input type="text" name="price" value="">
<input type="submit" name="subbtn" value="提交"  onclick="return check()" />
</form>
</body>
</html>
