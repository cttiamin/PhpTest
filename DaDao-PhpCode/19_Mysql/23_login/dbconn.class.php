<?php

class DBConn {
private static $db_host="localhost"; //服务器
private static $db_user="root";	//用户名
private static $db_psw="123456"; //密码
private static $db_name="sanyang"; //数据库名
private static $connection;
static function getConn(){
	$connection = new mysqli(self::$db_host,self::$db_user,self::$db_psw,self::$db_name);
	return $connection;
}

}
?>