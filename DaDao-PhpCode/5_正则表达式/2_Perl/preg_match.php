<?php
	$email="zjm@sina.com";
	if(preg_match("/^{[a-zA-Z0-9_-]}+{[.a-zA-Z0-9_-]}*@{[a-zA-Z0-9_-]}+{[.a-zA-Z0-9_-]+[a-zA-Z0-9_-]}+[a-zA-Z0-9_-]$/",$email)){
		echo "邮箱".$email."地址正确";
	}else{
		echo "邮箱".$email."地址不正确";
	}
	
$email="sunyang@163.com";
$pattern="/^([a-zA-Z0-9_-])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+([.a-zA-Z0-9_-]+[a-zA-Z0-9_-])+[a-zA-Z0-9_-]$/";
if(preg_match($pattern,$email)){
echo"邮箱 ".$email." 是正确的";
}else{
echo"邮箱 ".$email." 是不正确的";
}
?>