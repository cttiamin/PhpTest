<?php
	if(isset($_REQUEST['test'])){
	if((strlen($_REQUEST['test'])<6)){
		echo "���볤�Ȳ���С����";
	}else{
		echo "���Գɹ�";
	}
	}
?>
<form action="" method="post">
��֤����:<input type="text" name="test" valte="">(���Ȳ�����6)<br>
<input type="submit" name="submit" value="����">
</form>