<?php
	//观察者模式
interface IObserver{		  //抽象察者
	function onChanged($sender,$args);
}
interface IObservable{			//抽象主题
	function addObserver($observer);	//该方法用于添加主题
}
class UserList implements IObservable{  	//具体主题
	private $_observers=array();
	public function addCustomer($name){
		foreach( $this->_observers as $obs){
			$obs->onChanged($this,$name);
		}
	}
	public function addObserver($observer){
		$this->_observers[] = $observer;
		//print_r($this->_observers);
	}
}
class UserListLogger implements IObserver{  	//具体观者
	public function onChanged($sender,$args){
		echo ("'$args' 被添加到用户列表中\n");
	}
}
$url=new UserList();
$url->addObserver(new UserListLogger());
$url->addCustomer("三扬科技");


?>
