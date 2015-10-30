<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
if(isset($_POST['subbtn'])){
	if (strcmp($_POST['subbtn'],'保存信息')==0){
		echo "信息保存成功";
	}else{
		echo "确认填写的信息..";
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>跟据提按钮的值识别动作</title>
</head>

<body>
<form action="" method="POST">
<input type="submit" name="subbtn" value="保存信息">
<input type="submit" name="subbtn" value="确认信息">
</form>
</body>
</html>
