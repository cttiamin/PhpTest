<?php
$uploadfile="upload/".$_FILES['upload']['name'];
$message='';
if ($_FILES['upload']['type']!='image/gif'){
	echo '<li>�ϴ��ļ�����ֻ����Ϊgif</li>';
	exit;
}
if ($_FILES['upload']['size']>20480) {
	echo '<li>�ϴ��ļ����ɴ���20kb</li>';
	exit;
}
if (move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
	echo "<li>�ϴ��ɹ�</li>";
	exit;
}
echo "<li>�ϴ�ʧ��</li>";
?>