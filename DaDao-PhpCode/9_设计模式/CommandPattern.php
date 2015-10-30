<?php
//命令链模式
interface ICommand{
	function onCommand($name,$args);	//命令处理接口
}
class CommandChain{
	private $_commands=array();			//命令处理数组
	public function addCommand($cmd){   //添加命令处理
	$this->_commands[]=$cmd;
	}
	public function runCommand($name,$args){	//执行命令
		
		foreach($this->_commands as $cmd ){
			if($cmd->onCommand($name,$args))return;  	//如果处理成功就退出循环
		}
	}
}
class UserCommand implements ICommand{		//命令处理类1	
	public function onCommand($name,$args){
		if($name!='用户'){
		return false;
		}else{
		echo ("用户命令处理：".$name."\n");
		echo $args;
		return true;
		}
	}
}
class MailCommand implements ICommand{		//命令行禁止处理类2
	public function onCommand($name,$args){
		if($name!='邮件'){
		return false;
		}else{
		echo ("邮件命令处理：".$name."\n");
		echo $args;
		return true;
		}
	}
}
$cc=new CommandChain();
$cc->addCommand(new UserCommand() );
$cc->addCommand(new MailCommand() );
$cc->runCommand('用户','zjm' );
echo "<br>";
$cc->runCommand('邮件','zjm@k.com' );
?>
