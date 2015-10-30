<?php
$uploadfile="upload/".$_FILES['upload']['name'];
$message='';
if ($_FILES['upload']['type']!='image/gif'){
	echo '<li>上传文件类型只可以为gif</li>';
	exit;
}
if ($_FILES['upload']['size']>20480) {
	echo '<li>上传文件不可大于20kb</li>';
	exit;
}
if (move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
	echo "<li>上传成功</li>";
	exit;
}
echo "<li>上传失败</li>";
?>