<?php 
require_once('smartyconfig.php');  
require_once('include/conn.php'); 

$a_id=$_GET['id'];
$query=$mycon->selectedit("n_article","where a_id=$a_id");
$rs_about=mysql_fetch_array($query);
$smarty->assign("title",$rs_about['a_title']);
$smarty->assign("content",$rs_about['a_content']);

$smarty->display("news_display.html");
require_once("include/close.php");
?>