<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	if(isset($_POST['savebtn'])){
		echo "��Ϣ����ɹ�";
	}
	if(isset($_POST['confirmbtn'])){
		echo "ȷ����д����Ϣ...";
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<form action="" method="POST">
<input type="submit" name="savebtn" value="������Ϣ"/>
<input type="submit" name="confirmbtn" value="ȷ����Ϣ">
</form>
</body>
</html>
