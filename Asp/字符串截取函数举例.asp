<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim abc
abc="  这里是清华万博第三模块学习课程"
response.Write "left(abc,3)=" &left(abc,5)&"..<br>"   '从左边开始以长度值截取的字符串	 从左边开始	保留5位并且后两位以..结束
response.Write "right(abc,3)=" & right(abc,3)&"<br>"   '从右边开始以长度值截取的字符串	  从右边开始  保留3位 
response.Write "mid(abc,3,5)=" & mid(abc,3,7)&"<br>"   '从开始位置以长度值截取的字符串     从开始的位置数保留 7 位
  
%>
<br />
这里显示的是字符串长度测试函数    
<%=len(abc)%><br />     <!-- 取abc 值 的长度  -->

<%
if len(ltrim(abc))>15 then  					'如果abc的长度（去掉右边空格情况下）大于15 ，
response.Write left(ltrim(abc),14)&"…<br>"		'则输出abc 的14 个字符 并以...结束
else											'如果不是
response.Write abc								'则输出abc 的值
end if											'结束
%><br />

</body>
</html>
