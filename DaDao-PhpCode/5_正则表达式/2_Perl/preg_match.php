<?php
	$email="zjm@sina.com";
	if(preg_match("/^{[a-zA-Z0-9_-]}+{[.a-zA-Z0-9_-]}*@{[a-zA-Z0-9_-]}+{[.a-zA-Z0-9_-]+[a-zA-Z0-9_-]}+[a-zA-Z0-9_-]$/",$email)){
		echo "����".$email."��ַ��ȷ";
	}else{
		echo "����".$email."��ַ����ȷ";
	}
	
$email="sunyang@163.com";
$pattern="/^([a-zA-Z0-9_-])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+([.a-zA-Z0-9_-]+[a-zA-Z0-9_-])+[a-zA-Z0-9_-]$/";
if(preg_match($pattern,$email)){
echo"���� ".$email." ����ȷ��";
}else{
echo"���� ".$email." �ǲ���ȷ��";
}
?>