<?php
class DBConn{
private static $db_host="localhost";//������
private static $db_user="root";//�û���
private static $db_psw="root";//����
private static $db_name="sunyang";//���ݿ���
private static $connection;
static function getConn(){
$connection=new mysqli(self::$db_host,self::$db_user,self::$db_psw,self::$db_name);

return $connection;
}
}
?>