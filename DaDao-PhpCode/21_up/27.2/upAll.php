<?php
foreach ($_FILES['upload']['name'] as $index=>$name){
	$uploadfile="upload/".$name;
	if (move_uploaded_file($_FILES['upload']['tmp_name'][$index], $uploadfile)) {
		echo "�ļ�".$name."�ϴ��ɹ�<br>";
	}else echo "�ļ�".$name."�ϴ�ʧ��<br>";
}
?>