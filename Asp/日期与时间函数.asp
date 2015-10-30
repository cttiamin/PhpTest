<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<%
dim dd  '定义变量dd
dd=now() '给变量赋值为当前系统时间
response.write "现在的时间是:"
response.Write dd '输出当前时间
response.write "<br>今天是本月"
response.write day(dd) '输出日期
response.write "<br>今天是本周第"
response.write weekday(dd) '输出当前星期的第几天
response.write "天<br>"
response.write"本月是"
response.write month(dd) '输出当前月份
response.write "月<br>"
response.write year(dd) '输出当前年份
response.write "<br>"
response.write hour(dd) '输出当前小时
response.write "<br>"
response.write minute(dd) '输出当前分钟
response.write "<br>"
response.write second(dd) '输出当前秒钟
response.write "<br>"
response.write timevalue(dd) '输出当前时间的子类型(小时-分钟-秒)
response.write "<br>"
response.write datevalue(dd) '返回包含时间的date子类型
%>
</body>
</html>
