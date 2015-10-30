<html>
<head>
<title>异常处理</title>
</head>
<body>
<?php
class CustomException extends Exception{
	public function errorMessage(){
	$errorMsg = "出错原因：".$this->getMessage();"不是一个合法的Email";
	$errorMsg .="<br>";
	$errorMsg .="错误文件路径：".$this->getFile();
	$errorMsg .="<br>";
	$errorMsg .="错误代码行号：".$this-> getLine();	
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
