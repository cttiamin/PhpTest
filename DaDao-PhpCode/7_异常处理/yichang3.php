<?php
	class CustomException extends Exception{
		public function errorMessage(){
			$errorMsg='�쳣������'.$this->getFile().'�ĵ�'.$this->getLine().'��<br>ԭ��:'.$this->getMessage().'</br>����һ���Ϸ���E-mail';
			return $errorMsg;
		}
	}
$email="0453zjm@examplesain.com";
	
try{
	if(filter_var($email,FILTER_VALIDATE_EMAIL) ==FALSE){
	throw new customException($email);
	}
	if(strpos(email,"example")!==FALSE){
	throw new Exception("<br>".$email."<br>��һ��expmale�����ʼ���ַ");
	}
}catch(CustomException $e){
	echo $e->errorMessage();
}catch(Exception $e){
	echo $e->getMessage();
}

?>