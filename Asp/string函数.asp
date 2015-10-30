<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim abc,bcd
abc="abcdadfd"
bcd="a"
'response.Write "string(abc)="& string(6,abc) &"<br>"  '返回具有指定长度的，重复字符组成的字符串


'response.Write "space(8)=#"& space(8) &"#<br>"  '空格函数，返回具有指定数目的空格组成的字符串

'response.Write "instr(2,abc,bcd,1)=#"& instr(2,abc,bcd,1) &"#<br>"  '字符串匹配函数，返回某字符串在另一字符串中第一次出现的位置

str="abcABCdefDEF"
response.Write "大写字母是:"& ucase(str) &"<br>"  '返回字符串大写形式
response.Write "小写字母是:"& lcase(str) &"<br>"  '返回字符串小写形式

response.Write "字符串abc大于字符串bcd:strcomp(abc,bcd,1)="& strcomp(abc,bcd,1) &"<br>"  '字符串比较函数，
response.Write "字符串bcd小于字符串abc:strcomp(bcd,abc,1)="& strcomp(bcd,abc,1) &"<br>"  '字符串比较函数，
response.Write "字符串相等:strcomp(abc,abc,1)="& strcomp(abc,abc,1) &"<br>"  '字符串比较函数，
%>
</body>
</html>
