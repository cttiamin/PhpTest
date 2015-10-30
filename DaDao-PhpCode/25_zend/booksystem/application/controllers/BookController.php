<?php 
 class BookController extends Zend_Controller_Action{ 
 	//init函数在控制器初始化时执行，是最先执行的方法
	function init(){
			Zend_Loader::loadClass('Book');							//加载Book模型
			$this->view->baseUrl = $this->_request->getBaseUrl();	//获得系统根路径
			$this->view->title="图书管理";							//设置视图标题
	} 	
	//书籍全查方法
	function findallbookAction(){
		$book = new Book();
		//调用Zend_Db_Table的fetchAll方法,返回book数据库中所有的记录
		$date=$book->fetchAll();
		$paginator = Zend_Paginator::factory($date);
		//每页条数
		$paginator->setItemCountPerPage(5);
    	//获得当前页，设置当前页数
   		$paginator->setCurrentPageNumber($this->getRequest()->getParam('page'));
   		$this->view->paginator = $paginator;
   		$this->render("book/findallbook",null,true);
	}
	
	//添加书籍的方法
	function addbookAction(){	
	}
	//保存添加书籍的方法
	function savebookAction()	{
		//获得请求参数数组
		$bookParam=$this->_getAllParams();
		$bookArray=array("book_name"=>$bookParam["book_name"],"book_author"=>$bookParam["book_author"],"book_price"=>$bookParam["book_price"],"book_description"=>$bookParam["book_description"]);
		$book=new Book();
		//插入数据
		$book->insert($bookArray);
		//请求转发到findallbook方法
		$this->_forward("findallbook","Book");
	}
	//删除书籍的方法
	function deletebookAction(){
		$book = new Book();
		$book_id=$this->_getParam("book_id");
		//依据ID号删除数据
		$book->delete("book_id=".$book_id);
		$this->_forward("findallbook","Book");
	}
	//更新书籍的方法
	function updatebookAction(){
		$book = new Book();
		$book_id=$this->_getParam("book_id");
		$book=$book->fetchRow("book_id=".$book_id);
		$this->view->book=$book;
	}
	//保存书籍更新的方法
	function saveupdatebookAction(){
		$bookParam=$this->_getAllParams();
		$bookArray=array("book_name"=>$bookParam["book_name"],"book_author"=>$bookParam["book_author"],"book_price"=>$bookParam["book_price"],"book_description"=>$bookParam["book_description"]);
		$book=new Book();
		$book->update($bookArray,"book_id= '".$bookParam["book_id"]."'");
		$this->_forward("findallbook","Book");
	}
}
?>