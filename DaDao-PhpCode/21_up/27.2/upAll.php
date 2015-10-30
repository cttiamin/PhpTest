<?php
foreach ($_FILES['upload']['name'] as $index=>$name){
	$uploadfile="upload/".$name;
	if (move_uploaded_file($_FILES['upload']['tmp_name'][$index], $uploadfile)) {
		echo "文件".$name."上传成功<br>";
	}else echo "文件".$name."上传失败<br>";
}
?>