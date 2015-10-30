<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
str="abcdefghijklmnopqrstuvwxyz"  '定义一个字变量
for i=1 to 24	'i是从1循环到24 
randomize()	 	'刷新初始值
aa=int(rnd())	 'aa是随机取整数
'response.Write aa
'response.end()
str1=str&mid(str,100 rnd() mod 26+1,1)
next	'结束循环
response.write str1  '把str1的值输出

%>
</body>
</html>
