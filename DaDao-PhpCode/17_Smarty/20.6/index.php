<?php
require('libs/Smarty/Smarty.class.php');//包含Smarty类库文件
require("configs/conn.php");//包含数据库连接类
$sql="select id,title,posttime,user from topic order by id desc";
$result=$conn->Execute($sql);//执行SQL语句
@$articleAll=$result->GetAll();//获得数据表中所有的帖子
$smarty = new Smarty();//创建一个Smarty对象
$pageSize=3; //将每页显示的记录数设置为3
//判断请求的页数是否合法，以此定义不同的SQL语句
if (isset($_GET['page'])){
		if ($_GET['page']>0){
			$sql=$sql." limit ".$pageSize*($_GET['page']-1).", ".$pageSize;
		}else{
			$sql="select * from topic where id is null";
		}	
    }else{
	$sql=$sql." limit 0, ".$pageSize;	
    }
$result=$conn->Execute($sql);//执行SQL语句
@$articleByPage=$result->GetAll();//根据页数获得数据表中的帖子
$total=count($articleAll); //获取总记录数
$totalPage = ceil($total/$pageSize); //根据每页显示的记录数和总记录数获得总页数
$currentPage=1;//当前页
if (isset($_GET['page'])&&$_GET['page']>0&&$_GET['page']<=$totalPage){//如果请求了某页
	$currentPage=$_GET['page'];//当前页为请求的页数
}else{
	$currentPage=0;
}
   $first="";//首页
   $back="";//上一页
   $next="";//下一页
   $last="";//尾页   
if ($currentPage > 1){//如果当前页大于1
	$first ="<a href=?page=1>首页</a>";//显示首页
	$back="<a href=?page=".($currentPage-1).">上一页</a>";//显示上一页
}
if ($currentPage < $totalPage){
	$next="<a href=?page=".($currentPage+1).">下一页</a>";//显示下一页
    $last ="<a href=?page=$totalPage>尾页</a>";//显示尾页
} 
  //通过for循环来显示所有页面的链接 
   for ($i = 1; $i <=ceil($total/$pageSize); $i++) {
	if ($i == $currentPage){//如果为当前页
		 $links .='['.$i.']';//取消链接
	}else {
		$links .="<a href='?page=".$i."'>".$i."</a> ";//显示其它的链接
	}	
} 
   //给模板变量赋值
    $smarty->assign("total",$total); // 表中的总记录数
    $smarty->assign("currentPage",$currentPage); // 当前页数
    $smarty->assign("totalPage",$totalPage); // 总页数
    $smarty->assign("back",$back); // 上一页
    $smarty->assign("next",$next); // 下一页
    $smarty->assign("first",$first); // 首页
    $smarty->assign("last",$last); // 尾页   
    $smarty->assign("links",$links); // 各个页面的链接
    $smarty->assign("article",$articleByPage);//数据表中的帖子
    $smarty->display("index.tpl",$page);//显示模板
?>

