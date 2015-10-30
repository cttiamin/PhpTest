<?php
//mysqli面象过程连接数据库

$db_host='localhost';
$db_user='root';
$db_pws='123456';
$db_name='test';
$connection = mysqli_connect($db_host,$db_user,$db_pws,$db_name);
if( $connection){
	echo "数据库连接成功";
}else{
	echo "数据库连接失败";
}

?>