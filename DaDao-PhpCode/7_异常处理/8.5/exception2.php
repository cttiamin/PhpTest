<html>
<head>
<title>�쳣����</title>
</head>
<body>
<?php
class CustomException extends Exception{
	public function errorMessage(){
	$errorMsg = "����ԭ��".$this->getMessage();"����һ���Ϸ���Email";
	$errorMsg .="<br>";
	$errorMsg .="�����ļ�·����".$this->getFile();
	$errorMsg .="<br>";
	$errorMsg .="��������кţ�".$this-> getLine();	
	return $errorMsg;
	}
}
$email = "sunyang@example...com";
try {
	if(filter_var($email, FILTER_VALIDATE_EMAIL) ==FALSE){
		throw new customException($email);
	}
}catch (customException $e){
	echo $e->errorMessage();
}
?>
</body>
</html>
