<?php
	class CustomException extends Exception{
		public function errorMessage(){
			$errorMsg='�쳣������'.$this->getFile().'�ĵ�'.$this->getLine().'��<br>ԭ��:'.$this->getMessage().'</br>����һ���Ϸ���E-mail';
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