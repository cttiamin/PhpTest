<?php 
class LoginController extends Zend_Controller_Action{ 

	function init(){
			Zend_Loader::loadClass('Admin');						//����Adminģ��
			$this->view->baseUrl = $this->_request->getBaseUrl();	//���ϵͳ��·��
			$this->view->title="����Ա��½";							//������ͼ����
	} 	
	function indexAction(){
	}
	function loginAction(){
		//ȡ�ù���Ա��������
		$admin_name=trim($this->_getParam("admin_name"));
		//ȡ�ù���Ա�������
		$admin_password=trim($this->_getParam("admin_password"));
		
		if($admin_name=="" || $admin_password==""){
			$this->view->error="�û��������벻��Ϊ��";
			$this->render("login/index",null,true);
		}else{
			$admin=new Admin();
			echo "=============";
			$admin=$admin->fetchRow("admin_name= '".$admin_name."' and admin_password= '".$admin_password."'");
					if(empty($admin)){
						$this->view->error="������û���������";
						$this->render("login/index",null,true);
					}else{
						$this->_forward("findallbook","Book");
					}
		}
	}	
}
?>