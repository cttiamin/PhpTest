<?php
//������ģʽ
interface ICommand{
	function onCommand($name,$args);	//�����ӿ�
}
class CommandChain{
	private $_commands=array();			//���������
	public function addCommand($cmd){   //��������
	$this->_commands[]=$cmd;
	}
	public function runCommand($name,$args){	//ִ������
		
		foreach($this->_commands as $cmd ){
			if($cmd->onCommand($name,$args))return;  	//�������ɹ����˳�ѭ��
		}
	}
}
class UserCommand implements ICommand{		//�������1	
	public function onCommand($name,$args){
		if($name!='�û�'){
		return false;
		}else{
		echo ("�û������".$name."\n");
		echo $args;
		return true;
		}
	}
}
class MailCommand implements ICommand{		//�����н�ֹ������2
	public function onCommand($name,$args){
		if($name!='�ʼ�'){
		return false;
		}else{
		echo ("�ʼ������".$name."\n");
		echo $args;
		return true;
		}
	}
}
$cc=new CommandChain();
$cc->addCommand(new UserCommand() );
$cc->addCommand(new MailCommand() );
$cc->runCommand('�û�','zjm' );
echo "<br>";
$cc->runCommand('�ʼ�','zjm@k.com' );
?>
