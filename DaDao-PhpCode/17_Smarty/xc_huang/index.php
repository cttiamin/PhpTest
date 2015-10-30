<?php 
require_once('smartyconfig.php');  
require_once('include/conn.php'); 
$sqlstr="select * from n_article where a_id=50";
$query=mysql_query($sqlstr);
$rs_about=mysql_fetch_array($query);
$smarty->assign("abc",mysubstr($rs_about['a_content2'],0,150));
//
$query=$mycon->select("n_article","a_id desc","where class_id=201",0,15);
while($rs_news[]=mysql_fetch_array($query)){
}
//echo $re_news[5]['a_title'];
//exit;
$smarty->assign("news",$rs_news);

//下边是资师力量
$query2=$mycon->select("n_article","a_id desc","where class_id=301 and flag=1",0,6);

while($rs_pic[]=mysql_fetch_array($query2)){
}
//echo $rs_pic[3]['a_title'];
//exit;
$smarty->assign("rs_tu",$rs_pic);

$smarty->display("index.htm");

require_once("include/close.php");
?>
