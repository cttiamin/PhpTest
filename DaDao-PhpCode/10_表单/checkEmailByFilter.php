<?php
//Filter��֤����
if(filter_has_var(INPUT_POST,'u_email')){  //���������Ƿ����
	$testemail=filter_input(INPUT_POST,'u_email',FILTER_VALIDATE_EMAIL); //INPUT_POST ��Ԥ��������������INPUT_GET,INPUT_COOKIE,INPUT_REQUEST,INPUT_SERVER,INPUT_SESSION
	if($testemail){
		echo "Email��ַ��ʽ��ȷ!";
	}else{
		echo "Email��ַ��ʽ����";
	}
}
?>
<form action="" method="post">
Email��ַ��<input name="u_email" type="text" />
<input name="submit" type="submit" value="�ύ"/>
</form>