<?php
$uploadfile="upfiles/".$_FILES['upload']['name'];
if(move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
	echo "上传成功";
}else 
echo "上传失败";
?>