<?php

include_once("book.class.php");
session_start();	//��ʼ�Ự
$book=new book();
$book->setbook_number("b0803");
$book->setbook_name("PHP����ָ��");
$book->setbook_price(83.5);
$book->setbook_author("����Ƽ�");
$_SESSION['bookinfo']=$book; //������book����Session ��
?>
<a href="show_bookinfo.php">aaa</a>