<?php
if(isset($_POST['email'])){
$rege="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$";
	if (ereg($rege,$_POST['email'])){
		echo "��ȷ";
	}else{
		echo "Email ��ʽ��д����";
	}
}


?>
<form action="" name="checkform" method="post">
<input name="email" type="text"><br>
<input name="" type="submit"  value="�ύ">
</form>