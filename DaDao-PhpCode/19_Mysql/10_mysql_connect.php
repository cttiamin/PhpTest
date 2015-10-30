<?php

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
echo "当前连接的字符集编码格式:".mysql_client_encoding();//字符集编码格式


?>
