<?php
$uploadfile="upfiles/".$_FILES['upload']['name'];
if(move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
	echo "�ϴ��ɹ�";
}else 
echo "�ϴ�ʧ��";
?>