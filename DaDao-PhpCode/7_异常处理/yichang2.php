<?php
	class CustomException extends Exception{
		public function errorMessage(){
			$errorMsg='异常出现在'.$this->getFile().'的第'.$this->getLine().'行<br>原因:'.$this->getMessage().'</br>不是一个合法的E-mail';
			return $errorMsg;
		}
	}
$email="0453zjm@sain....com";
	
try{
	if(filter_var($email,FILTER_VALIDATE_EMAIL) ==FALSE){
	throw new customException($email);
	}
}catch(customException $e){
	echo $e->errorMessage();
}

?>