<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<p>
  <?php
$filepath="/up/";//设置文件上传路径
$id=$_GET['id'];
if(isset($_FILES['file']['name'])){
	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$filesize=$_FILES['file']['size'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$up_name=time()+(3600*24*365*3);       //定义上传后的文件名
if ($type=="image/pjpeg"){
	$ok=1;
	$up_name.=".jpg";
}elseif($type=="image/gif"){
	$ok=1;
	$up_name.=".gif";
}else{
	$ok=0;
}
if($ok==1){
	$upfile=$filepath.$up_name;

	move_uploaded_file($tmp_name,"..".$upfile);
	echo "<SCRIPT language=javascript>";
	echo "window.opener.document.form1.$id.value='".$upfile."';";
	echo "window.close();";
	echo "</script>";


}else{
echo"你选择的文件类型不是图片格式";
}
//print_r($_FILES['file']);
}
?>
</p>
<p>&nbsp;</p>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div align="center">
    <p>
      <input type="file" name="file" />
    </p>
    <p>
      <input type="submit" name="Submit" value=" 开 始 上 传 " />
      </p>
  </div>
</form>
</body>
</html>
