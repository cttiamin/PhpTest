<?php 
require_once('smartyconfig.php');  
require_once('include/conn.php'); 

if(isset($_GET['page'])){
$page=$_GET['page'];
}else{
$page=1;
}
$query=$mycon->selectpg("n_article","a_id desc",5,$page,"where class_id=201");
while($rs_news[]=mysql_fetch_array($query)){
}
$smarty->assign("title",$rs_news);
//以下是分页的内容
$pagastr=$mycon->pagenext("news_list.php?");
$smarty->assign("pagestr",$pagastr);

$smarty->display("news_list.html");
require_once("include/close.php");
?>