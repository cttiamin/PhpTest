<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����Ӧ��</title>
</head>

<body>
<?php
	//����һ������࣬�������һ���������ڷ�������
class book{
	function getbook($bookname){
		return $bookname;
	}
}
	//ʵ����һ��Book��Ķ���book1
	$book1=new book;
	echo $book1->getbook("php");
	//ʵ����һ��Book��Ķ���book2
	$book2=new book;
	echo $book2->getbook("jsp");
?>
</body>
</html>
