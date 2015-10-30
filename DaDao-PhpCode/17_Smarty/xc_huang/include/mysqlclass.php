<?php
class mysql{
	private $hostname;
	private $username;
	private $password;
	private $database;
	private $conn;
	private $table;
	private $whr;
	private $pagecounts;//针对查询分页而言,共多少页
	private $pagenum;//总页码数
	private $page;
	
	
	function __construct(){
		$this->hostname="localhost";
		$this->username="root";
		$this->password="123456";
		$this->database="news";
		$this->connect();
		$this->selectdb();
		
	}
	
	//以下是和数据库服务建立连接
	function connect(){
		$this->conn=mysql_connect($this->hostname,$this->username,$this->password)or die("和服务器连接不通");
	}
	
	//选择数据库的方法
	function selectdb(){
		mysql_select_db($this->database)or die(mysql_error());
		mysql_query("set names 'gb2312'"); 
	}
	
	//断开和数据库的连接
	
	function close(){
		mysql_close($this->conn);
	}
	
	//添加数据insert方法
	function insert($table,$cols,$values){
		$sqlstr="insert into $table ($cols)values($values)";
		mysql_query($sqlstr,$this->conn);	
	}
	

	//修改数据库方法
	function update($table,$str='',$whr=''){
		$sqlstr="update $table set $str $whr";
		mysql_query($sqlstr,$this->conn);	
	}

	//删除数据方法
	function delete($table,$whr=''){
		$sqlstr="delete from $table $whr";
		mysql_query($sqlstr,$this->conn);	
	}
			
			
	    //不分页查询数据库方法
		//$table数据表名称
		//$orderby="id desc" 或者"id asc"
		//$whr查询条件 默认值为空,$whr=" where id>8 "
		//$start 从第几条开始
		//$num要显示多少条数据
		
	function select($table,$orderby,$whr='',$start=0,$num=10){
		$sqlstr="select * from  $table $whr order by $orderby limit $start,$num";
		$query=mysql_query($sqlstr,$this->conn);
		return $query;
	}
	
	//查询单条数据
	function selectedit($table,$whr=''){
	$sqlstr="select * from  $table $whr";
	$query=mysql_query($sqlstr,$this->conn);
	return $query;
	}
	
	//查询所有内容(不分页)
	
	function selectall($table,$orderby='',$whr=''){
	$sqlstr="select * from  $table $whr order by $orderby ";
	$query=mysql_query($sqlstr,$this->conn);
	return $query;
	}


	//分页的方法
		function selectpg($table,$orderby,$pagenum=20,$page,$whr=''){
			$start=($page-1)*$pagenum;
			$sqlstr="select * from  $table $whr order by $orderby limit $start,$pagenum";
			$query=mysql_query($sqlstr,$this->conn);
			$this->table=$table;   //把此方法用到的表名称写入到对象属性中
			$this->whr=$whr;       //把此方法查询条件写入到对象属性中
			$this->pagenum=$pagenum; //每页显示记录数写入到对象属性中
			$this->pagecount();      //调用下面的计算总页码数函数
			$this->page=$page;
			return $query;
		}
		
	
	//取得记录集数量,并返回总页码数
	function pagecount(){
		$table=$this->table;
		$whr=$this->whr;
		$sqlstr="select * from  $table $whr ";
		$query=mysql_query($sqlstr,$this->conn);
		$countnum=mysql_num_rows($query);
		$pagenum=$this->pagenum;
		$this->pagecounts=ceil($countnum/$pagenum);
		return $countnum;
	}
	//以下是显示分页代码 要求和上一个代码结合起来使用
	
	function pagenext($url="?"){
			$page=$this->page;
	
			$pagecounts=$this->pagecounts;

		if($page<=1){
			$strpage="首页&nbsp;上一页&nbsp;";
		}else{
			$strpage="<a href='$url&page=1'>首页</a>&nbsp;&nbsp;<a href='$url&page=".($page-1)."'>上一页</a>&nbsp;";
		}
		if($page>=$pagecounts){
			$strpage.="下一页&nbsp;最后一页";
		}else{
			$strpage.="&nbsp;<a href='$url&page=".($page+1)."'>下一页</a>&nbsp;&nbsp;<a href='".$url."&page=$pagecounts'>最后一页</a>";
		}
		$strpage.="&nbsp;当前为第".$page."页&nbsp;共".$pagecounts."页";
		//echo $strpage;
		return $strpage;
	}
	
	function jscript($url,$alertstr='成功'){
		echo"<script language=javascript>";
		echo"alert('$alertstr');";
		echo"location='$url';";
		echo"</script>";
	}
}

?>
