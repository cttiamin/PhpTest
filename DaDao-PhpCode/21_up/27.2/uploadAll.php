<html>
<head>
<title>多文件上传</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>
<form enctype="multipart/form-data" action="upAll.php" method="POST">
<input name="upload[]" type="file"><br>
<input name="upload[]" type="file"><br>
<input name="upload[]" type="file"><br>
<input type="submit" value="上传">
</form>
</body>
</html>