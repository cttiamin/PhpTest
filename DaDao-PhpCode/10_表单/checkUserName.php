<?php
//ctype_alnum��֤����
if(isset($_POST['u_name'])){
if(ctype_alnum($_POST['u_name'])){
	echo "ע��ɹ�";
}else{
	echo "�û���ֻ������ĸ���������";
}
}
?>
<form action="" method="post">
�û�����<input name="u_name" type="text" />(���ֺ���ĸ���)
<input name="" type="submit" value="�ύ" />
</form>