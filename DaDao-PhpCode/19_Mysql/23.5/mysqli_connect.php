<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库
$connection = mysqli_connect( $db_host,$db_user,$db_psw,$db_name);        
if ( $connection ) {
   echo "数据库连接成功";
}
else {
   echo "数据库连接失败";
}
?>
