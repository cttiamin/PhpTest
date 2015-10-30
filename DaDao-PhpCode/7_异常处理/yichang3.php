<?php
	class CustomException extends Exception{
		public function errorMessage(){
			$errorMsg='异常出现在'.$this->getFile().'的第'.$this->getLine().'行<br>原因:'.$this->getMessage().'</br>不是一个合法的E-mail';
			return $errorMsg;
		}
	}
$email="0453zjm@examplesain.com";
	
try{
	if(filter_var($email,FILTER_VALIDATE_EMAIL) ==FALSE){
	throw new customException($email);
	}
	if(strpos(email,"example")!==FALSE){
	throw new Exception("<br>".$email."<br>是一个expmale电子邮件地址");
	}
}catch(CustomException $e){
	echo $e->errorMessage();
}catch(Exception $e){
	echo $e->getMessage();
}

?>