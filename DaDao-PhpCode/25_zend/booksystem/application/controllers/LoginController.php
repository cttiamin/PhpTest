<?php 
class LoginController extends Zend_Controller_Action{ 

	function init(){
			Zend_Loader::loadClass('Admin');						//加载Admin模型
			$this->view->baseUrl = $this->_request->getBaseUrl();	//获得系统根路径
			$this->view->title="管理员登陆";							//设置视图标题
	} 	
	function indexAction(){
	}
	function loginAction(){
		//取得管理员姓名参数
		$admin_name=trim($this->_getParam("admin_name"));
		//取得管理员密码参数
		$admin_password=trim($this->_getParam("admin_password"));
		
		if($admin_name=="" || $admin_password==""){
			$this->view->error="用户名或密码不能为空";
			$this->render("login/index",null,true);
		}else{
			$admin=new Admin();
			echo "=============";
			$admin=$admin->fetchRow("admin_name= '".$admin_name."' and admin_password= '".$admin_password."'");
					if(empty($admin)){
						$this->view->error="错误的用户名和密码";
						$this->render("login/index",null,true);
					}else{
						$this->_forward("findallbook","Book");
					}
		}
	}	
}
?>