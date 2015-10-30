<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>this语句在javascript中使用</title>
<?php
echo "<script type=\"text/javascript\">";
echo "function testThis(){";
echo "alert(this.button.elel);";
echo "return false";
echo "}";
echo "</script>";
?>
</head>
<body>
<div align="center">
<input type="button" value="点击这时机" name="button" elel="zjmphp" onclick="testThis()">
</div>
</body>
</html>
