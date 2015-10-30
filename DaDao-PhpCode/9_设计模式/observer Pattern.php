<?php
	//�۲���ģʽ
interface IObserver{		  //�������
	function onChanged($sender,$args);
}
interface IObservable{			//��������
	function addObserver($observer);	//�÷��������������
}
class UserList implements IObservable{  	//��������
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
class UserListLogger implements IObserver{  	//�������
	public function onChanged($sender,$args){
		echo ("'$args' ����ӵ��û��б���\n");
	}
}
$url=new UserList();
$url->addObserver(new UserListLogger());
$url->addCustomer("����Ƽ�");


?>
