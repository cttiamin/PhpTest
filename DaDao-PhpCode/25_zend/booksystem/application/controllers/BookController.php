<?php 
 class BookController extends Zend_Controller_Action{ 
 	//init�����ڿ�������ʼ��ʱִ�У�������ִ�еķ���
	function init(){
			Zend_Loader::loadClass('Book');							//����Bookģ��
			$this->view->baseUrl = $this->_request->getBaseUrl();	//���ϵͳ��·��
			$this->view->title="ͼ�����";							//������ͼ����
	} 	
	//�鼮ȫ�鷽��
	function findallbookAction(){
		$book = new Book();
		//����Zend_Db_Table��fetchAll����,����book���ݿ������еļ�¼
		$date=$book->fetchAll();
		$paginator = Zend_Paginator::factory($date);
		//ÿҳ����
		$paginator->setItemCountPerPage(5);
    	//��õ�ǰҳ�����õ�ǰҳ��
   		$paginator->setCurrentPageNumber($this->getRequest()->getParam('page'));
   		$this->view->paginator = $paginator;
   		$this->render("book/findallbook",null,true);
	}
	
	//����鼮�ķ���
	function addbookAction(){	
	}
	//��������鼮�ķ���
	function savebookAction()	{
		//��������������
		$bookParam=$this->_getAllParams();
		$bookArray=array("book_name"=>$bookParam["book_name"],"book_author"=>$bookParam["book_author"],"book_price"=>$bookParam["book_price"],"book_description"=>$bookParam["book_description"]);
		$book=new Book();
		//��������
		$book->insert($bookArray);
		//����ת����findallbook����
		$this->_forward("findallbook","Book");
	}
	//ɾ���鼮�ķ���
	function deletebookAction(){
		$book = new Book();
		$book_id=$this->_getParam("book_id");
		//����ID��ɾ������
		$book->delete("book_id=".$book_id);
		$this->_forward("findallbook","Book");
	}
	//�����鼮�ķ���
	function updatebookAction(){
		$book = new Book();
		$book_id=$this->_getParam("book_id");
		$book=$book->fetchRow("book_id=".$book_id);
		$this->view->book=$book;
	}
	//�����鼮���µķ���
	function saveupdatebookAction(){
		$bookParam=$this->_getAllParams();
		$bookArray=array("book_name"=>$bookParam["book_name"],"book_author"=>$bookParam["book_author"],"book_price"=>$bookParam["book_price"],"book_description"=>$bookParam["book_description"]);
		$book=new Book();
		$book->update($bookArray,"book_id= '".$bookParam["book_id"]."'");
		$this->_forward("findallbook","Book");
	}
}
?>