<?php
echo $_POST['test']."<br>"; 
echo addslashes($_POST['test'])."<br>"; //ʹ�ú���addslashes()ת���ַ�
	if (!get_magic_quotes_gpc()) {//ʹ��get_magic_quotes_gpc()�����ж�magic_quotes_gpc�Ƿ���
	    $test = addslashes($_POST['test']);//ʹ�ú���addslashes()ת���ַ�
	} else {
	    $test = $_POST['test'];
	}
echo $test;
?>
<form action="" method="post">
����magic_quotes_gpc<input name="test" type="text" />
<input name="" type="submit">
</form>