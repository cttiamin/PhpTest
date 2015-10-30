<?php
if($_GET['id']){
	$id=$_GET['id'];
	sleep(1);
	$conn=mysql_connect('localhost','root','123456');
	mysql_select_db('test',$conn);

	$sql="select * from user where name=".$id;
	$q=mysql_query($sql);
//mysql_fetch_array($q);
//echo $q['name'];
if(is_array(mysql_fetch_row($q))){
	echo "用户名已经存在";
}else{
	echo "用户名可以使用";
}
}
?>