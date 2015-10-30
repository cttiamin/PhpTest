<?php

include_once("book.class.php");
session_start();	//开始会话
$book=new book();
$book->setbook_number("b0803");
$book->setbook_name("PHP技术指导");
$book->setbook_price(83.5);
$book->setbook_author("三扬科技");
$_SESSION['bookinfo']=$book; //将对象book放入Session 中
?>
<a href="show_bookinfo.php">aaa</a>